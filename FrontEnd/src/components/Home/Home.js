import './Home.scss';
import * as React from "react";
import {Col, Row} from "reactstrap";
import Content from "../Content/Content";
import Header from "../Header/Header";

class Home extends React.Component {
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

export default Home;
