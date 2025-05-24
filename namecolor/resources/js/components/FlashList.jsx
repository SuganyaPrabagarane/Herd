import { useEffect, useState } from "react";
import { useNavigate } from "react-router";
import axios from 'axios';
import './FlashCard.css';

const FlashList = () => {
  const [words, setWords] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);
  const navigate = useNavigate();

  useEffect(() => {
    const fetchWords = async () => {
      try {
        const response = await axios.get('http://namecolor.test/api/proxy/finnish-words', {
          headers: {
            'x-api-key': '9dd038947f7d41a7bd55c7f73766f815'
          }
        });
        const updatedWords = response.data.words.map(word => ({
          ...word,
          favorite: false,
          flipped: false
        }));
        setWords(updatedWords);
        setLoading(false);
      } catch (err) {
        setError('Failed to fetch words');
        setLoading(false);
      }
    };

    fetchWords();
  }, []);

  const handleSave = async (word) => {
    try {
      const saveWords = {
        finnish: word.finnish,
        english: word.english,
        example: word.example,
      };

      const response = await axios.post('http://namecolor.test/api/words', saveWords);

      if (response.status === 201) {
        alert('Word saved!');
        setWords(prevWords =>
          prevWords.map(w => w.id === word.id ? { ...w, favorite: true } : w)
        );
      }
    } catch (error) {
      console.error('Failed to save flashcard:', error);
    }
  };

  const handleFlip = (id) => {
    setWords(prevWords =>
      prevWords.map(word =>
        word.id === id ? { ...word, flipped: !word.flipped } : word
      )
    );
  };

  return (
    <>
        <div className="heading">
        <h1>Welcome to Finnish Flash Card</h1>
        <button className='backBtn 'onClick={() => navigate(-1)}>Back</button>

        </div>
      

      <div className="flashcard-list">
        {words.length > 0 ? (
          words.map(word => (
            <div
              className={`flashcard ${word.flipped ? 'flipped' : ''}`}
              key={word.id}
              onClick={() => handleFlip(word.id)}
            >
              <div className="flashcard-inner">
                <div className="flashcard-front">
                  <p><strong>Finnish:</strong> {word.finnish}</p>
                  <p><strong>English:</strong> {word.english}</p>
                  <button
                    onClick={(e) => {
                      e.stopPropagation(); // Prevent card from flipping on button click
                      handleSave(word);
                    }}
                    disabled={word.favorite}
                  >
                    {!word.favorite ? 'Save' : 'Saved'}
                  </button>
                </div>
                <div className="flashcard-back">
                  <p><strong>Example:</strong> {word.example}</p>
                </div>
              </div>
            </div>
          ))
        ) : (
          !loading && <p>No words to display.</p>
        )}
      </div>

      {loading && <div>Loading...</div>}
      {error && <div>{error}</div>}

      
    </>
  );
};

export default FlashList;
