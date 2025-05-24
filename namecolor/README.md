# NameColor & Finnish FlashCard Web Application

This is a web application that combines two main features: **Name Color Management** and **Finnish Flash Cards**.  
The frontend is built with **React**, and the backend API services are powered by **Laravel**.

---

## Name Color Feature

This feature allows users to store and manage their name along with their favorite color.

### ✅ Core Functions

-   **Add New Entry**  
    Users can enter a name and their favorite color, which is saved to the database.

-   **Retrieve Entries**  
    All saved entries are fetched from the database and displayed on the page.

-   **Edit Entry**  
    Users can update existing name-color pairs, and the updated data is saved in the database.

-   **Delete Entry**  
    Users can delete any entry, which removes it from the database.

---

## Finnish Flash Card Feature

This section is designed to help users learn Finnish vocabulary using interactive flashcards.

### ✅ Core Functions

-   **Fetch Data**  
    Retrieves Finnish words, their English translations, and example sentences from the [FinnFast](https://finnfast.fi/) API.

-   **Display Words**  
    Each word is displayed in a flashcard format with:

    -   Finnish and English translations on the front
    -   An example sentence on the back

-   **Save Favorites**  
    Users can mark specific flashcards as favorites. These are saved to the database using Laravel.

-   **Flip Interaction**  
    Clicking on a flashcard flips it to show the example sentence, helping users understand words in context.

---

## Tech Stack

-   **Frontend:** React
-   **Backend:** Laravel
-   **HTTP Client:** Axios
-   **Database:** MySQL
