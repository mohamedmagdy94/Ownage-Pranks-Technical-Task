import './IdeasList.scss';
import * as React from "react";
import { connect } from "react-redux";
import {
    Button, Col,
    Modal,
    ModalBody,
    ModalFooter,
    ModalHeader,
    Pagination,
    PaginationItem,
    PaginationLink,
    Row
} from "reactstrap";
import {withRouter} from "react-router-dom";
import {compose} from "redux";
import { fetchCategoryIdeas } from "../../actions";
import IdeasItem from "../IdeasItem/IdeasItem";

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

    setPage = (pageNumber) => {
        if (this.props.data.currentPage != pageNumber)
            this.props.fetchCategoryIdeas(this.props.category.slug, {page: pageNumber});
    }

    render() {
        let ideasListMap = '';
        let pageNumbers = [];
        let data = this.props.data;
        let paginationItems = '';
        if (!!data.data) {
            ideasListMap = data.data.map((idea) =>
                <IdeasItem idea={idea} key={idea.id}/>
            );
            for (let i = 0; i < data.pagesCount; i++) {
                pageNumbers.push(i + 1);
            }
            paginationItems = pageNumbers.map((number) =>
                <PaginationItem active={number == data.currentPage}>
                    <PaginationLink onClick={() => this.setPage(number)}>
                        {number}
                    </PaginationLink>
                </PaginationItem>
            );
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
                    <Col className='pl-0'>
                        <Pagination aria-label="Page navigation example">
                            {paginationItems}
                        </Pagination>
                    </Col>
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
