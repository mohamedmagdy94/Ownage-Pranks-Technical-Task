import './App.scss';
import * as React from "react";
import Header from "../components/Header/Header";
import {Button, Col, Container, Jumbotron, Row} from 'reactstrap';

class App extends React.Component {
    render() {
        return (
            <div>
                <Header />
                <Jumbotron>
                    <Container>
                        <Row>
                            <Col>
                                <h1>Welcome to React</h1>
                                <p className="text-primary">
                                    test primary text
                                </p>
                                <p className="text-secondary">
                                    test secondary text
                                </p>
                            </Col>
                        </Row>
                    </Container>
                </Jumbotron>
            </div>
            // <div className="App">
            //     <Header />
            // </div>
        );
    }
}

export default App;
