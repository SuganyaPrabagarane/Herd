import { useNavigate } from "react-router"
import './Home.css';

const Home =() =>{
    const navigate = useNavigate();


    return(
        <>
            <div className="flashcard-home">
                <button className="home-btn" onClick={(e)=>navigate("/flashlist")}>Flash Card</button>
                <button className="home-btn" onClick={(e) =>navigate("/namecolor")}>Name Color</button>
            </div>

            <div className="container">
                <section className="section-namecolor">
                    <h1>Name Color:</h1>
                    <p>The Name Color feature allows users to add their name along with their favorite color. Users can also edit existing entries or delete them as needed.</p>
                    <p>Want to add your name and favorite color? Just click the <strong style={{color: '#e27242'}} >"NAME COLOR" </strong>button!</p>
                </section>

                <section className="section-flashcard">
                    <h1>Finnish Flash Card:</h1>
                    <p>With the Flash Card feature, users can explore Finnish vocabulary flashcards, each containing a Finnish word, its English translation, and an example sentence.</p>
                    <p>Users can also save their favorite words for later review.</p>
                    <p>Want to start learning Finnish? Just click the <strong style={{color: '#e27242'}}>"FLASH CARD"</strong> button!</p>
                </section>
            </div>
        </>
    )
}

export default Home;