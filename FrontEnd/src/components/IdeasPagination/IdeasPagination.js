import * as React from "react";
import {Col, Pagination, PaginationItem, PaginationLink} from 'reactstrap';
import {withRouter} from "react-router-dom";

class IdeasPagination extends React.Component {
    render() {
        let pageNumbers = [];
        for (let i = 0; i < this.props.size; i++) {
            pageNumbers.push(i + 1);
        }
        let paginationItems = pageNumbers.map((number) =>
            <PaginationItem active={number == this.props.currentPage}>
                <PaginationLink href=''>
                    {number}
                </PaginationLink>
            </PaginationItem>
        );
        return (
            <Col className='pl-0'>
                <Pagination aria-label="Page navigation example">
                    {paginationItems}
                </Pagination>
            </Col>
        );
    }
}

export default withRouter(IdeasPagination);