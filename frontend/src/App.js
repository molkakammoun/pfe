import { useEffect, useState } from "react";

function App() {
  const [message, setMessage] = useState("");

  useEffect(() => {
    fetch("http://localhost:8000/api/home") 
      .then((response) => response.json())
      .then((data) => setMessage(data.message))
      .catch((error) => console.error("Erreur:", error));
  }, []);

  return (
    <div>
      <h1>React + Symfony</h1>
      <p>{message}</p>
    </div>
  );
}

export default App;
