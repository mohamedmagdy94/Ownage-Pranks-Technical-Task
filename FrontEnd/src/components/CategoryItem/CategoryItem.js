import './CategoryItem.scss';
import * as React from "react";
import {Card, CardBody, CardImg, CardTitle} from "reactstrap";

class CategoryItem extends React.Component {
    constructor(props) {
        super(props);

        // this.state.category = props.category;
    }

    render() {
        return (
            <a href={`#${this.props.category.slug}`} className="text-dark categoryListItem">
                <Card className="rounded bg-primary">
                    <CardImg top width="100%" className="p-5 bg-white" src={this.props.category.img_url}
                             alt={this.props.category.name}/>
                    <CardBody>
                        <CardTitle tag="h5">{this.props.category.name}</CardTitle>
                    </CardBody>
                </Card>
            </a>
        );
    }
}

export default CategoryItem;
