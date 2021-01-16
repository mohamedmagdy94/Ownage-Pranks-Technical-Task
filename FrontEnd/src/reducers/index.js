import { SET_CATEGORIES_IDEAS } from "../actions/types";

export default function(state = {}, action) {
    switch (action.type) {
        case SET_CATEGORIES_IDEAS:
            return { data: action.payload };
        default:
            return state;
    }
}