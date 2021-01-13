import logo from './logo.png';
import './Header.scss';
import * as React from "react";
import {Navbar, NavbarBrand} from "reactstrap";

class Header extends React.Component {
    render() {
        return (
            <Navbar color="dark" dark>
                <NavbarBrand href="/" className="mx-auto"><img src={logo} className="App-logo" alt="logo"/></NavbarBrand>
            </Navbar>
        );
    }
}

export default Header;
