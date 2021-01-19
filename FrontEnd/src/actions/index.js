import axios from "axios";
import {SET_CATEGORIES_IDEAS, SET_CATEGORY} from "./types";

const BASE_URL = 'http://pranks.local/api';
axios.defaults.headers.common['API-KEY'] = 'DlKlimeUB8b12vbIIwDKtFR5Pk7aKDigjNsqRdSh' // for all requests

export function fetchCategory(categorySlug) {
    return function(dispatch) {
        return axios.get(`${BASE_URL}/categories?slug=${categorySlug}`).then(({ data }) => {
            dispatch(setCategory(categorySlug, data));
        });
    };
}
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

function setCategory(categorySlug, data) {
    return {
        type: SET_CATEGORY,
        payload: data,
        slug: categorySlug
    };
}