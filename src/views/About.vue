<template>
  <div class="about">
    <div class="container-fluid">
      <div class="profile-container">
        <div class="row no-gutter">
          <div class="col">
            <div class="profile-text-container">
              <h1 class="font-medium title-text">About</h1>
              <hr/>
              <p>Hello! I'm a Software Developer located in Norman, OK.</p>
              <p>I have experience in leading teams, mobile dev, front-end, back-end, and UI/UX work.</p>
              <p>Browse some of my work, see my resume, or get in contact.</p> 
              <p>I can be found at <a class="link-text" href="https://github.com/ApproximatelyInfinity">Github</a> or <a class="link-text" href="https://www.linkedin.com/in/donbrogdon/">Linkedin</a></p>
            </div>
          </div>
          <div class="col">
            <div class="profile-skills-container">
              <div class="row no-gutter">
                <div class="col">
                  <h5 class="skills-title">Languages</h5>
                  <hr/>
                  <li v-for="(language, index) in languages" :key="`language-${index}`">
                    <p class="skills-text">{{language}}</p>
                  </li>
                </div>
                <div class="col">
                  <h5 class="skills-title">Technologies</h5>
                  <hr/>
                  <li v-for="(technology, index) in technologies" :key="`technology-${index}`">
                    <p class="skills-text">{{technology}}</p>
                  </li>
                </div>
                <div class="col">
                  <h5 class="skills-title">Other</h5>
                  <hr/>
                  <li v-for="(programs, index) in other" :key="`programs-${index}`">
                    <p class="skills-text">{{programs}}</p>
                  </li>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'About',
  props: {
    languages: {
      type: Array
    },
    technologies: {
      type: Array
    },
    other: {
      type: Array
    },
  },
}
</script>

<style scoped lang="scss">
  @import './src/style/globals.scss';
  @import './src/style/fonts.scss';
  @import './src/style/buttons.scss';

  .profile-container {
    margin-top: 10%;
    margin-left: 24px;
    margin-right: 24px;
    .title-text {
      color: map-get($colors, primary-dark);
    }
    li {
      list-style: none;
    }

    .link-text {
      color: map-get($colors, secondary);
    }
    .link-text:active {
      border-bottom: 0;
    }

    .profile-skills-container {
      margin-top: 24px;
    }
  }
</style>