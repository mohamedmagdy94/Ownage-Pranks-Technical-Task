import './IdeasItem.scss';
import * as React from "react";
import {Card, CardBody, CardImg, CardTitle, Col} from "reactstrap";

class IdeasItem extends React.Component {
    render() {
        return (
            <Col md={6} className='ideaListItem mb-2'>
                <Card className="rounded bg-primary">
                    <CardImg top width="100%" className="bg-white" src={this.props.idea.img_url}
                             alt={this.props.idea.title}/>
                    <CardBody>
                        <CardTitle tag="h5">{this.props.idea.title}</CardTitle>
                    </CardBody>
                </Card>
            </Col>
        );
    }
}

export default IdeasItem;
