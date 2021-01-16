import './IdeasList.scss';
import * as React from "react";
import {Button, Modal, ModalBody, ModalFooter, ModalHeader} from "reactstrap";
import {withRouter} from "react-router-dom";

class IdeasList extends React.Component {
    constructor(props) {
        super(props);
    }

    toggle = () => {
        this.props.history.goBack();
    };

    render() {
        return (
            <Modal isOpen={true} toggle={this.toggle}>
                <ModalHeader toggle={this.toggle}>{this.props.category.name}</ModalHeader>
                <ModalBody>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </ModalBody>
                <ModalFooter>
                    <Button color="danger" onClick={this.toggle}>Close</Button>
                </ModalFooter>
            </Modal>
        );
    }
}

export default withRouter(IdeasList);
