import './CategoryItem.scss';
import * as React from "react";
import {Card, CardBody, CardImg, CardTitle} from "reactstrap";
import {Link, withRouter} from "react-router-dom";
import {compose} from "redux";
import {connect} from "react-redux";
import {fetchCategory} from "../../actions";

class CategoryItem extends React.Component {
    constructor(props) {
        super(props);
    }

    componentDidMount() {
        this.props.fetchCategory(this.props.slug);
    }

    render() {
        let category = this.props.category.data;
        if (!!category) {
            category = category[0];
            return (
                <Link to={{
                    pathname: `/category/${category.slug}`,

                    // This is the trick! This link sets
                    // the `background` in location state.
                    state: {
                        background: this.props.location,
                        category: category
                    }
                }} className="text-dark categoryListItem">
                    <Card className="rounded bg-primary">
                        <CardImg top width="100%" className="p-5 bg-white" src={category.img_url}
                                 alt={category.name}/>
                        <CardBody>
                            <CardTitle tag="h5">{category.name}</CardTitle>
                        </CardBody>
                    </Card>
                </Link>
            );
        }
        return null;
    }
}

const mapStateToProps = (state, ownProps) => {
    let Category = state[ownProps.slug] ?? {};
    return {category: Category};
};
export default  compose(
    withRouter,
    connect(mapStateToProps, {
        fetchCategory
    })
)(CategoryItem);
