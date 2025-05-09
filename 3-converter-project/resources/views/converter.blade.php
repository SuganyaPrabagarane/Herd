<!DOCTYPE html>
<html>

<head>
    <title>Converter Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ff5733;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="number"],
        select {
            padding: 5px;
            width: 100%;
            max-width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 15px;
            background-color: #ff5733;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e0ffe0;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Converter Application</h1>

        <!-- Form for conversions -->
        <form action="{{ route('converter.convert') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="value">Enter Value:</label>
                <input type="number" name="value" id="value" step="any"
                    value="{{ old('value', isset($value) ? $value : '') }}" required>
            </div>
            <div class="form-group">
                <label for="conversion_type">Select Conversion:</label>
                <select name="conversion_type" id="conversion_type" required>
                    <option value="" disabled selected>Select a conversion</option>

                    <!-- Temperature -->
                    <optgroup label="Temperature">
                        <option value="celsius_to_fahrenheit"
                            {{ old('conversion_type', isset($conversionType) && $conversionType === 'celsius_to_fahrenheit' ? 'selected' : '') }}>
                            Celsius to Fahrenheit</option>
                        <option value="celsius_to_kelvin"
                            {{ old('conversion_type', isset($conversionType) && $conversionType === 'celsius_to_kelvin' ? 'selected' : '') }}>
                            Celsius to Kelvin</option>
                    </optgroup>

                    <!-- Speed -->
                    <optgroup label="Speed">
                        <option value="kilometer_to_meter"
                            {{ old('conversion_type', isset($conversionType) && $conversionType === 'kilometer_to_meter' ? 'selected' : '') }}>
                            Kilometer to Meter</option>
                        <option value="kilometer_to_knots"
                            {{ old('conversion_type', isset($conversionType) && $conversionType === 'kilometer_to_knots' ? 'selected' : '') }}>
                            Kilometer to Knots</option>
                    </optgroup>

                    <!-- Mass -->
                    <optgroup label="Mass">
                        <option value="kilogram_to_gram"
                            {{ old('conversion_type', isset($conversionType) && $conversionType === 'kilogram_to_gram' ? 'selected' : '') }}>
                            Kilogram to Gram</option>
                        <option value="gram_to_kilogram"
                            {{ old('conversion_type', isset($conversionType) && $conversionType === 'gram_to_kilogram' ? 'selected' : '') }}>
                            Gram to Kilogram</option>
                    </optgroup>

                </select>
            </div>
            <button type="submit">Convert</button>
        </form>

        <!-- Display the result -->
        @if (isset($result))
            <div class="result">
                <h3>Result:</h3>
                <p>
                    @if ($unitFrom === 'Celsius')
                        {{ $value }}° {{ $unitFrom }} = {{ $result }}° {{ $unitTo }}
                    @else
                        {{ $value }} {{ $unitFrom }} = {{ $result }} {{ $unitTo }}
                    @endif

                </p>
            </div>
        @endif
    </div>
</body>

</html>
