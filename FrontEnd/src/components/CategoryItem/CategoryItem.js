import './CategoryItem.scss';
import * as React from "react";
import {Card, CardBody, CardImg, CardTitle} from "reactstrap";
import {Link, withRouter} from "react-router-dom";

class CategoryItem extends React.Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <Link to={{
                    pathname: `/category/${this.props.category.slug}`,

                    // This is the trick! This link sets
                    // the `background` in location state.
                    state: {
                        background: this.props.location,
                        category: this.props.category
                    }
                }} className="text-dark categoryListItem">
                <Card className="rounded bg-primary">
                    <CardImg top width="100%" className="p-5 bg-white" src={this.props.category.img_url}
                             alt={this.props.category.name}/>
                    <CardBody>
                        <CardTitle tag="h5">{this.props.category.name}</CardTitle>
                    </CardBody>
                </Card>
            </Link>
        );
    }
}

export default withRouter(CategoryItem);
