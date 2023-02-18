import { ref } from 'vue'
import { defineStore } from 'pinia'
import { API } from "../api";

export const usePageStore = defineStore('page', () => {

    const _page = ref(null)
    // const _pageContact = ref(null)

    const storePage = (page) => {
        _page.value = page
    }

    // const storeContactPage = (pageContact) => {
    //     _pageContact.value = pageContact
    // }

    const getContentPage = async (pageName) => {
        const response = await API.page.getContent(pageName)
        // storePage(response[0])
        if (response) {
            storePage(response[0])
        } else {
            console.log("page not found!")
        }
    }

    // const getContactPage = async (pageContactName) => {
    //     const response = await API.page.getContact(pageContactName)

    //     if (response) {
    //         storeContactPage(response[0])
    //     } else {
    //         console.log("page not found!")
    //     }
    // }

    return {
        _page,
        getContentPage,
        // _pageContact,
        // getContactPage
    }

})