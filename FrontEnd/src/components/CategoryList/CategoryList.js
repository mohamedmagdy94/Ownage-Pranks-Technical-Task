import './CategoryList.scss';
import * as React from "react";
import {Col, Row} from "reactstrap";
import CategoryItem from "../CategoryItem/CategoryItem";
import {withRouter} from "react-router-dom";

class CategoryList extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        let categoriesSlugs = ['view-all-pranks', 'new-prank-calls', 'food-restaurant-prank-calls'];
        return (
            <Row className="h-100">
                <Row className="align-content-center mx-auto w-100">
                    {categoriesSlugs.map((categorySlug) =>
                        <Col md={4}>
                            <CategoryItem slug={categorySlug}/>
                        </Col>
                    )}
                </Row>
            </Row>
        );
    }
}

export default withRouter(CategoryList);
