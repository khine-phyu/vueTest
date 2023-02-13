import axios from "axios";

export const API = {
    'post': {
        'getPosts': async (postType) => {
            const { data } = await axios.get(`http://vue1002.local/wp-json/wp/v2/${postType}`)
            return data
        }
    }
}