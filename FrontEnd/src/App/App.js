import './App.scss';
import * as React from "react";
import Header from "../components/Header/Header";
import Content from "../components/Content/Content";
import {Col, Row} from "reactstrap";

class App extends React.Component {
    render() {
        return (
            <div className="container-fluid">
                <Row className="justify-content-center min-vh-100">
                    <Col>
                        <div className="d-flex flex-column h-100">
                            <Header/>
                            <Content/>
                        </div>
                    </Col>
                </Row>
            </div>
        );
    }
}

export default App;
