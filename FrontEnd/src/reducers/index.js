import {
    SET_CATEGORY,
    SET_CATEGORIES_IDEAS,
} from "../actions/types";

export default function(state = {}, action) {
    switch (action.type) {
        case SET_CATEGORIES_IDEAS:
            return { ...state, data: action.payload };
        case SET_CATEGORY:
            return { ...state, [action.slug]: action.payload };
        default:
            return state;
    }
}