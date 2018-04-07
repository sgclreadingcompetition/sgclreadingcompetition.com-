import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home.vue'
import AboutUs from '@/components/AboutUs.vue'
import Registration from '@/components/Registration.vue'
import NewsFeed from '@/components/NewsFeed.vue'
import LoginPage from '@/components/LoginPage.vue'
import ContactUs from '@/components/ContactUs.vue'
import CompetitionDetails from '@/components/CompetitionDetails.vue'
import Book from '@/components/Book.vue'
import Question from '@/components/Question.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/AboutUs',
      name: 'AboutUs',
      component: AboutUs
    },
    {
      path: '/Registration',
      name: 'Registration',
      component: Registration
    },
    {
      path: '/NewsFeed',
      name: 'NewsFeed',
      component: NewsFeed
    },
    {
      path: '/LoginPage',
      name: 'LoginPage',
      component: LoginPage
    },
    {
      path: '/ContactUs',
      name: 'ContactUs',
      component: ContactUs
    },
    {
      path: '/CompetitionDetails',
      name: 'CompetitionDetails',
      component: CompetitionDetails
    },
    {
      path: '/Book',
      name: 'Book',
      component: Book
    },
    {
      path: '/Question',
      name: 'Question',
      component: Question
    }
  ]
})
