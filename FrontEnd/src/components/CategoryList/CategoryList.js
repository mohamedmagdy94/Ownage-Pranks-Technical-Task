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
        let categories = {
            viewAllPranks: {
                "id": 1,
                "ext_id": "59be498733978d0018249161",
                "status": "active",
                "slug": "view-all-pranks",
                "name": "View All Pranks",
                "img_url": "http://cdn.prankerapp.com/prank-image/lQL9b-q1VIVDyOv0.png",
                "ord": 0,
                "created": "2019-06-10T11:42:27+00:00",
                "modified": "2019-06-10T11:42:27+00:00",
                "synced": "2019-06-10T11:42:27+00:00"
            },
            newPranks: {
                "id": 2,
                "ext_id": "591339f9e04806002ec816e3",
                "status": "active",
                "slug": "new-prank-calls",
                "name": "New Pranks",
                "img_url": "http://cdn.prankerapp.com/prank-image/gjoftbYVq1ECeu_l.png",
                "ord": 2,
                "created": "2019-06-10T11:42:27+00:00",
                "modified": "2020-07-01T06:52:38+00:00",
                "synced": "2020-07-01T06:52:38+00:00"
            },
            foodRestaurantsPranks: {
                "id": 12,
                "ext_id": "58b47a41ac2541000488dab9",
                "status": "active",
                "slug": "food-restaurant-prank-calls",
                "name": "Food and Restaurants",
                "img_url": "http://cdn.prankerapp.com/prank-image/09ma0tPGW9UYdKWk.png",
                "ord": 10,
                "created": "2019-06-10 11:42:30",
                "modified": "2020-07-01 06:52:39",
                "synced": "2020-07-01 06:52:39"
            }
        };
        return (
            <Row className="h-100">
                <Row className="align-content-center mx-auto w-100">
                    <Col md={4}>
                        <CategoryItem category={categories.viewAllPranks}/>
                    </Col>
                    <Col md={4}>
                        <CategoryItem category={categories.newPranks}/>
                    </Col>
                    <Col md={4}>
                        <CategoryItem category={categories.foodRestaurantsPranks}/>
                    </Col>
                </Row>
            </Row>
        );
    }
}

export default withRouter(CategoryList);
