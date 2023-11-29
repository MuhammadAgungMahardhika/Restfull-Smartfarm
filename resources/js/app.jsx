import "./bootstrap";
import "../css/app.css";

import ReactDOM from "react-dom/client";
import App from "./Page/Layout";

const app = ReactDOM.createRoot(document.getElementById("app"));

app.render(<App />);
