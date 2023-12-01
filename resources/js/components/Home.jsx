import Navbar from "./Navbar";
import Sidebar from "./Sidebar";
import Footer from "./Footer";
import Dashboard from "../pages/Dashboard";
import { useEffect } from "react";
function Home() {
    return (
        <div className="wrapper">
            <Sidebar />
            <div className="main">
                <Navbar />
                <main className="content">
                    <div className="container-fluid p-0">
                        <Dashboard />
                    </div>
                </main>
                <Footer />
            </div>
        </div>
    );
}

export default Home;
