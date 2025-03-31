body {
    font-family: Arial, sans-serif;
    background-color: #1E3A8A; /* Granatowe tło */
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: rgba(255, 255, 255, 0.1); /* Lekko przezroczyste tło */
    padding: 30px;
    border-radius: 10px;
    width: 350px;
    text-align: center;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

h2 {
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 14px;
    margin-top: 10px;
}

input {
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    margin-top: 5px;
}

input[type="submit"] {
    background-color: #10B981; /* Zielony */
    color: white;
    font-weight: bold;
    font-size: 18px;
    padding: 15px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
    transition: background 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0E9B72; /* Ciemniejszy zielony */
}