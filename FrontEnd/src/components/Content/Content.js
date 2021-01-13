import './Content.scss';
import * as React from "react";
import {Col, Container, Jumbotron, Row} from "reactstrap";
import CategoryList from "../CategoryList/CategoryList";

class Content extends React.Component {
    render() {
        return (
            <Jumbotron className="row justify-content-center flex-grow-1 mb-0">
                <Container className="d-flex flex-column">
                    <Row>
                        <Col>
                            <h1 className="text-primary text-center">Prank Categories</h1>
                        </Col>
                    </Row>
                    <CategoryList/>
                </Container>
            </Jumbotron>
        );
    }
}

export default Content;
