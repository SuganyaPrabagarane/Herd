import { BrowserRouter, Routes, Route } from "react-router-dom";
import NameColor from "./NameColor";
import FlashList from "./FlashList";
import Home from "./Home";

function App() {

    return (

        
        <BrowserRouter>
            <Routes>
                <Route
                    path="/"
                    element={
                        <Home />
                    }
                />
                <Route
                    path="/namecolor"
                    element={
                        <NameColor />
                    }
                />

                <Route path="/flashlist"
                        element = {<FlashList />}
                />
            </Routes>
        </BrowserRouter>
    );
}

export default App;
