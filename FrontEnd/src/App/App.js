import './App.scss';
import * as React from "react";
import Header from "../components/Header/Header";

class App extends React.Component {
    render() {
        return (
            <div className="App">
                <Header />
            </div>
        );
    }
}

export default App;
