import './IdeasList.scss';
import * as React from "react";
import { connect } from "react-redux";
import {Button, Modal, ModalBody, ModalFooter, ModalHeader, Row} from "reactstrap";
import {withRouter} from "react-router-dom";
import {compose} from "redux";
import { fetchCategoryIdeas } from "../../actions";
import IdeasItem from "../IdeasItem/IdeasItem";
import IdeasPagination from "../IdeasPagination/IdeasPagination";

class IdeasList extends React.Component {
    constructor(props) {
        super(props);
    }

    componentDidMount() {
        this.props.fetchCategoryIdeas(this.props.category.slug);
    }

    toggle = () => {
        this.props.history.goBack();
    };

    render() {
        let ideasListMap = '';
        let pagination = '';
        let data = this.props.data;
        if (!!data.data) {
            ideasListMap = data.data.map((idea) =>
                <IdeasItem idea={idea} key={idea.id}/>
            );
            if (data.pagesCount > 1) {
                pagination = <IdeasPagination size={data.pagesCount} currentPage={data.currentPage}/>;
            }
        }
        return (
            <Modal isOpen={true} toggle={this.toggle} className='modal-dialog-scrollable modal-lg'>
                <ModalHeader toggle={this.toggle}>{this.props.category.name}</ModalHeader>
                <ModalBody>
                    <Row>
                        {ideasListMap}
                    </Row>
                </ModalBody>
                <ModalFooter>
                    {pagination}
                    <Button color="danger" onClick={this.toggle}>Close</Button>
                </ModalFooter>
            </Modal>
        );
    }
}
const mapStateToProps = ({ data = {} }) => ({
    data
});
export default compose(
    withRouter,
    connect(mapStateToProps, {
        fetchCategoryIdeas
    })
)(IdeasList);
