import logo from './logo.png';
import './Header.scss';
import * as React from "react";

class Header extends React.Component {
    render() {
        return (
            <header className="App-header">
                <img src={logo} className="App-logo" alt="logo"/>
            </header>
        );
    }
}

export default Header;
