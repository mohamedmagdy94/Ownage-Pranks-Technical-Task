import './App.scss';
import * as React from "react";
import {Route, Switch, withRouter} from "react-router-dom";
import Home from "../components/Home/Home";
import IdeasList from "../components/IdeasList/IdeasList";

class App extends React.Component {
    render() {
        let location = this.props.location;

        // This piece of state is set when one of the
        // gallery links is clicked. The `background` state
        // is the location that we were at when one of
        // the gallery links was clicked. If it's there,
        // use it as the location for the <Switch> so
        // we show the gallery in the background, behind
        // the modal.
        let background = location.state && location.state.background;
        let category = location.state && location.state.category;

        return (
            <div>
                <Switch location={background || location}>
                    <Route exact path="/" children={<Home />} />
                    <Route path="/category/:slug" children={<IdeasList category={category}/>} />
                </Switch>

                {/* Show the modal when a background page is set */}
                {background && <Route path="/category/:slug" children={<IdeasList category={category}/>} />}
            </div>
        );
    }
}

export default withRouter(App);
