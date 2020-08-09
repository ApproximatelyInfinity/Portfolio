<template>
  <div id="app">
    <div v-if="window.width < 820">
      <Mobile :location="location" :phone="phone" :email="email" :languages="languages" :technologies="technologies" :other="other" :project="project" :workexp="workexp" :education="education"/>
    </div>
    <div v-else>
      <Navigation/>
      <router-view :location="location" :phone="phone" :email="email" :languages="languages" :technologies="technologies" :other="other" :project="project" :workexp="workexp" :education="education"/>
    </div>
  </div>
</template>

<script>
import Navigation from './components/Navigation.vue'
import Mobile from './components/Mobile.vue'

export default {
  name: 'App',
  components: {
    Navigation,
    Mobile,
  },
  data() {
    return {
      window: {
        height: 0,
        width: 0, 
      },
      location: 'Norman, OK',
      //phone: '(580) 786-8297',
      phone: '(405) 623-9089',
      email: 'dbrogdon91@gmail.com',
      languages: ['C/C++', 'JS', 'PHP', 'MySQL', 'HTML/CSS'],
      technologies: ['SASS', 'Bootstrap', 'VueJS', 'ReactJS', 'NodeJS', 'jQuery'],
      other: ['Photoshop', 'Illustrator', 'VS Code', 'NPM', 'Git'],
      project: [
        {
          title: 'Melodic Odyssey',
          website: 'https://www.melodicodyssey.com/',
          role: 'Full Stack Developer',
          stack: 'JS, PHP, Bootstrap',
          details: "A music education website that is built on Javascript, HTML, CSS, and SASS on the front-end. The back-end host a user registration profile built with PHP and MySQL where the user can edit different aspects of their profile. The use can upload files, change information, request a new password via email, and delete their account.",
        },
        {
          title: "Oklahoma Botanical Identification Application",
          website: "https://www.github.com/",
          role: "Mobile Developer",
          stack: "Swift",
          details: "An iOS app developed in a pair programming environment that list the different plant species found in Oklahoma via reading a file. This was developed using Swift and xCode.",
        },
        {
          title: "Best Mold Technologies",
          website: "https://www.github.com/",
          role: "Database Developer",
          stack: "MySQL, MS Access",
          details: "Worked closely with the employees and CEO of BMT to develop software that kept track of tire molds and transactions within the company. Used Toad, MS Access, and SQL to develop a UI and a database for the software.",
        },
        {
          title: "Candy Cane Shooter",
          website: "https://www.github.com/approximatelyinfinity",
          stack: "C#, Unity",
          role: "Developer",
          details: "A first person shooter created in Unity using C# with the ability to play multiplayer LAN matches."
        },
        {
          title: "Department of Defense, U.S. Army Fires Division",
          website: "",
          stack: "HTML, CSS, PHP, MySQL",
          role: "Developer",
          details: "Used HTML/CSS to develop the front end and PHP for the back end for a repository for the DoD for my college capstone project. Worked very closely with the graphic design team to create their layout. Worked with the rest of the team to create the documentation for the project. ",
        },
        {
          title: "Yuppy Puppy - Grooming Spa",
          website: "https://www.yuppypuppyok.com",
          stack: "VueJS, NodeJS, Twilio API, Mapbox API",
          role: "Developer",
          details: "Website for a local business. Utilizes the Twilio API to make appoitnments via text message.",
        },
      ],
      workexp: [
        {
          company: "OK Cannabis",
          title: "Distributor",
          location: "OKC, OK",
          from: "Sept 2019",
          to: "Current",
          details: "Delivery driver delivering wholesale product throughout current clientele.",
        },
        {
          company: "Resale Rack",
          title: "Sales",
          location: "Norman, OK",
          from: "Oct 2018",
          to: "July 2019",
          details: "Managed and maintained an online store selling items for a thrift store. Shipped items, photographed items, sorted items, and dealt with clients online. ",
        },
        {
          company: "SDB Consulting",
          title: "IT Assistant",
          location: "Duncan OK",
          from: "June 2014",
          to: "Aug 2018",
          details: "Helped maintain computer hardware within the company. Fixed all technical issues that arose with the company and set up new devices for use.",
        },
        {
          company: "M&M Supply Co.",
          title: "IT Assistant",
          location: "Duncan, OK",
          from: "June 2013",
          to: "Jan 2014",
          details: "Maintained computer hardware/software for thirteen stores spread across Oklahoma and Texas. Restored old hardware to working condition. Setup new workstations for the various locations. Handled technical issues over the phone with the several different stores.",
          short: "Maintained computer hardware/software for thirteen stores spread across Oklahoma and Texas."
        },
      ],
      education: [
        {
          university: "Cameron University",
          degree: "Bachelor of Science",
          subject: "Computer Science",
          location: "Lawton, OK",
          date: "Dec 2017",
        },
        {
          university: "Cameron University",
          degree: "Associates of Science",
          subject: "Information Technology",
          location: "Lawton, OK",
          date: "May 2017",
        }
      ],
    }
  },
  created() {
    //Gets screen size when the window size is changed
    window.addEventListener('resize', this.handleResize)
    this.handleResize();
    this.isMobile();
  },
  destroyed() {
    //Removes event listening, so it can be captured again
    window.removeEventListener('resize', this.handleResize)
  },
  methods: {
    isMobile() {
      //Detects if the device is running on a mobile browser
      if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return true
      } else {
        return false
      }
    },
    handleResize() {
      //Gets the windows dimensions to be set to the created() and destroyed() functions
      this.window.width = window.innerWidth;
      this.window.height = window.innerHeight;
    },
  }
}
</script>
<style lang="scss">
  #app {
    overflow-x: hidden;
  }
</style>
