import { ref } from 'vue'
import { defineStore } from 'pinia'
import { API } from "../api";

export const usePostStore = defineStore('page', () => {

    const _posts = ref(null)

    const storePage = (posts) => {
        _posts.value = posts
    }

    const getPosts = async (postType) => {
        const response = await API.post.getPosts(postType)
        // storeposts(response[0])
        if (response) {
            storePage(response)
        } else {
            console.log("posts not found!")
        }
    }

    return {
        _posts,
        getPosts,
        usePostStore
    }

})