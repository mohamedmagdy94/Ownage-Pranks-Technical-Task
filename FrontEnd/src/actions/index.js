import axios from "axios";
import { SET_CATEGORIES_IDEAS } from "./types";

const BASE_URL = 'http://pranks.local/api';
// axios.defaults.headers.common['API-KEY'] = 'DlKlimeUB8b12vbIIwDKtFR5Pk7aKDigjNsqRdSh' // for all requests

export function fetchCategoryIdeas(categorySlug, config = {page:1, limit:10}) {
    return function(dispatch) {
        return axios.get(`${BASE_URL}/scripts?page=${config.page ?? 1}&limit=${config.limit ?? 10}&slug =${categorySlug}`).then(({ data }) => {
            dispatch(setCategoryIdeas(data));
        });
    };
}

function setCategoryIdeas(data) {
    return {
        type: SET_CATEGORIES_IDEAS,
        payload: data
    };
}