<template>
  <div class="home">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="col">
          <div class="home-text-container">
            <div class="row no-gutter">
              <div class="col-sm">
                <p class="font-heavy name">Don Brogdon,</p>
              </div>
            </div>
            <div class="row no-gutter">
              <div class="col-sm">
                <p class="font-medium title">Developer<span class="animated-flash animated flash">_</span></p>
              </div>
            </div>
            <div class="row no-gutter">
              <div class="col-sm">
                <p class="font-light detail">I produce elegant, performant, and accessible digitial experiences.</p>
              </div>
            </div>
            <div class="row no-gutter">
              <div class="btn-container">
                <router-link to="/projects"><button class="btn btn-standard">Explore Work</button></router-link>
                <span/>
                <router-link to="/about"><button class="btn btn-standard">View Profile</button></router-link>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="home-img-container">
            <HelloWorld/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld
  },
}
</script>

<style scoped lang="scss">
  @import './src/style/globals.scss';
  @import './src/style/fonts.scss';
  @import './src/style/buttons.scss';

  .animated-flash {
    animation-iteration-count: infinite;
  }

  .home-text-container {
    margin-top: 22%;
    margin-left: 10%;

    .name {
      font-size: 80px;
    }
    .title {
      font-size: 50px;
      margin-top: -32px;
    }
    .detail {
      font-size: 24px;
      margin-top: -16px;
      margin-left: 5px;
    }
    .btn-container {
      margin-left: 15px;

      span {
        margin-right: 40px;
      }
    }
  }

  .home-img-container {
    margin-top: 10%;
    margin-right: 5%;
    margin-left: 10%;
  }

  //4k
  @media only screen and (max-width: 2560px) {
    .home-img-container {
      height: 70%;
      width: 70%;
    }
  }
  
  //Laptop L
  @media only screen and (max-width: 1440px) {
    .home-text-container {
      margin-top: 22%;
      margin-left: 10%;

      .name {
        font-size: 80px;
      }
      .title {
        font-size: 50px;
        margin-top: -32px;
      }
      .detail {
        font-size: 24px;
        margin-top: -16px;
        margin-left: 5px;
      }
      .btn-container {
        margin-left: 15px;

        span {
          margin-right: 40px;
        }
      }
    }

    .home-img-container {
      margin-top: 10%;
      height: 80%;
      width: 80%;
    }
  }

  @media only screen and (max-width: 1150px) {
    .home-text-container {
      margin-left: 2%;

      .name {
        font-size: 64px;
      }
      .title {
        font-size: 44px;
      }
      .detail {
        font-size: 24px;
      }
    }
  }

  //Laptop
  @media only screen and (max-width: 1024px) {
    .home-text-container {
      margin-left: 0%;

      .name {
        font-size: 60px;
      }
      .title {
        font-size: 40px;
      }
      .detail {
        font-size: 20px;
      }
    }

    .home-img-container {
      margin-top: 15%;
    }
  }
</style>
