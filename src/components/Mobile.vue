<template>
    <div class="Mobile">
        <!-- Slider Main Container -->
        <div class="swiper-container">
            <!-- Additional Required Wrapper -->
            <div class="swiper-wrapper">
                <!--Slides-->

                <!-- Home -->
                <div id="home-mobile" class="swiper-slide home-mobile">
                    <div class="container-fluid">
                        <div class="home-container">
                            <div class="row no-gutter">
                                <div class="col">
                                    <h1 class="font-heavy home-name">Don Brogdon,</h1>
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="col">
                                    <h2 class="font-medium home-title">Developer<span class="animated-flash animated flash">_</span></h2>
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="col">
                                    <p class="font-medium home-details"> I produce elegant, performant, and accessible digitial experiences.</p>
                                </div>
                            </div>
                            <div class="row no-gutter">
                            <div class="col">
                                <button class="btn btn-mobile" type="button" @click="goToSlide(2)"><span class="btn-text">Explore Work</span></button>
                                <span style="margin-right: 32px;"></span>
                                <button class="btn btn-mobile" type="button" @click="goToSlide(1)"><span class="btn-text">View Profile</span></button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- About -->
                <div id="about-mobile" class="swiper-slide about-mobile">
                    <div class="container-fluid">
                        <div class="row no-gutter">
                            <div class="col">
                                <h1 class="font-medium title-text">About</h1>
                            </div>
                        </div>
                        <div class="row no-gutter">
                            <div class="col">
                                <div class="profile-text-container font-medium">
                                    <p>Hello! I'm a Software Developer located in Norman, OK.</p>
                                    <p>I have exerience in leading teams, front-end, back-end, and UI/UX work.</p>
                                    <p>Browse some of my <a @click="goToSlide(2)" class="link-text">work</a> or <a @click="goToSlide(3)" class="link-text">view my resume</a></p>
                                    <p>You can also find me at <a class="link-text" href="https://www.github.com/approximatelyinfinity">Github</a> or <a class="link-text" href="https://www.linkedin.com/in/donbrogdon">Linkedin</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="profile-skills-container font-medium">
                            <div class="row no-gutter">
                                <div class="col">
                                    <h5 class="skills-title">Languages</h5>
                                    <li v-for="(language, index) in languages" :key="`language-${index}`">
                                        <p class="skills-text">{{language}}</p>
                                    </li>
                                </div>
                                <div class="col">
                                    <h5 class="skills-title">Technologies</h5>
                                    <li v-for="(technology, index) in technologies" :key="`technology-${index}`">
                                        <p class="skills-text">{{technology}}</p>
                                    </li>
                                </div>
                                <div class="col">
                                    <h5 class="skills-title">Other</h5>
                                    <li v-for="(programs, index) in other" :key="`programs-${index}`">
                                        <p class="skills-text">{{programs}}</p>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project -->
                <div id="project-mobile" class="swiper-slide project-mobile">
                    <div class="container-fluid">
                        <div class="project-container">
                            <div class="row no-gutter">
                                <div class="col">
                                    <h1 class="font-medium title-text">Work</h1>
                                </div>
                            </div>
                            <div class="project-mo">
                                <div class="row no-gutter">
                                    <div class="col">
                                        <div class="project">
                                            <h2 class="project-title font-medium">{{project[0].title}}</h2>
                                            <h4 class="project-stack font-medium">{{project[0].stack}}</h4>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="project-btn-container">
                                            <a href="https://www.melodicodyssey.com/"><button class="btn btn-work btn-mobile">View</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-cc">
                                <div class="row no-gutter">
                                    <div class="col">
                                        <div class="project">
                                            <h2 class="project-title font-medium">{{project[3].title}}</h2>
                                            <h4 class="project-stack font-medium">{{project[3].stack}}</h4>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="project-btn-container">
                                            <button class="btn btn-work btn-mobile">View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-yp">
                                <div class="row no-gutter">
                                    <div class="col">
                                        <div class="project">
                                            <h2 class="project-title font-medium">{{project[5].title}}</h2>
                                            <h4 class="project-stack font-medium">{{project[5].stack}}</h4>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="project-btn-container">
                                            <a href="https://www.yuppypuppyok.com/"><button class="btn btn-work btn-mobile">View</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Resume -->
                <div id="resume-mobile" class="swiper-slide resume-mobile">
                    <div class="container-fluid">
                        <div class="row no-gutter">
                            <div class="col">
                                <h1 class="font-medium title-text">Resume</h1>
                            </div>
                        </div>
                        <div class="row no-gutter">
                            <div class="col">
                                <div class="resume-title font-medium">
                                    <p class="title-name font-medium">Don Brogdon</p>
                                    <p class="title-email">{{email}}</p>
                                    <p class="title-details">{{location}} --- {{phone}}</p>
                                    <button class="btn btn-mobile">Letters of Rec</button>
                                    <span style="margin-right: 32px;"></span>
                                    <a class="pdf-link" href="http://www.donbrogdon.com/assets/CV.pdf" target="_blank">
                                        <button class="btn btn-mobile">View PDF</button>
                                    </a>
                                </div>
                            </div>
                            <div class="resume-education font-medium">
                                <div class="col">
                                    <p class="resume-title font-medium">Education</p>
                                    <p class="education-university">{{education[0].university}}</p>
                                    <p class="education-degree">{{education[0].degree}} in {{education[0].subject}}<br><i>{{education[0].date}}</i></p>
                                    <p class="education-degree">{{education[1].degree}} in {{education[1].subject}}  <br><i>{{education[1].date}}</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutter">
                            <div class="col">
                                <div class="resume-projects font-medium">
                                    <p class="resume-title font-medium">Projects</p>
                                    <p class="project-title">{{project[4].title}}</p>
                                    <p class="project-role"><i>{{project[4].role}}</i></p>
                                    <p class="project-details">{{project[4].details}}</p>
                                   
                                    <p class="project-title">{{project[1].title}}</p>
                                    <p class="project-role"><i>{{project[1].role}}</i></p>
                                    <p class="project-details">{{project[1].details}}</p>
                                    
                                    <p class="project-title">{{project[2].title}}</p>
                                    <p class="project-role"><i>{{project[2].role}}</i></p>
                                    <p class="project-details">{{project[2].details}}</p>
                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="resume-experience font-medium">
                                    <p class=" resume-title font-medium">Experience</p>
                                    <p class="exp-company">{{workexp[0].company}}</p>
                                    <p class="exp-title"><i>{{workexp[0].title}}</i></p>
                                    <p class="exp-date">{{workexp[0].from}} - {{workexp[0].to}}</p>
                                    <p class="exp-details">{{workexp[0].details}}</p>
                                    <br>
                                    <p class="exp-company">{{workexp[1].company}}</p>
                                    <p class="exp-title"><i>{{workexp[1].title}}</i></p>
                                    <p class="exp-date">{{workexp[1].from}} - {{workexp[1].to}}</p>
                                    <p class="exp-details">{{workexp[1].details}}</p>
                                    <br>
                                    <p class="exp-company">{{workexp[2].company}}</p>
                                    <p class="exp-title"><i>{{workexp[2].title}}</i></p>
                                    <p class="exp-date">{{workexp[2].from}} - {{workexp[2].to}}</p>
                                    <p class="exp-details">{{workexp[2].details}}</p>
                                    <br>
                                    <p class="exp-company">{{workexp[3].company}}</p>
                                    <p class="exp-title"><i>{{workexp[3].title}}</i></p>
                                    <p class="exp-date">{{workexp[3].from}} - {{workexp[3].to}}</p>
                                    <p class="exp-details">{{workexp[3].details}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rec -->
                <div id="rec-mobile" class="swiper-slide rec-mobile">
                    <div class="container-fluid">
                        <div class="row no-gutter">
                            <div class="col">
                                <h1 class="font-medium title-text">Letters of Recommendation</h1>
                            </div>
                        </div>
                        <div class="row no-gutter bmt-container">
                            <div class="col">
                                <img class="rec-img-bmt" src="src/assets/sbmt.PNG"/>
                                <a class="pdf-link" href="http://www.donbrogdon.com/assets/BMT.pdf" target="_blank">
                                    <svg class="download-btn" height="32pt" viewBox="0 0 512 512" width="32pt" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m409.785156 278.5-153.785156 153.785156-153.785156-153.785156 28.285156-28.285156 105.5 105.5v-355.714844h40v355.714844l105.5-105.5zm102.214844 193.5h-512v40h512zm0 0"/>
                                    </svg>
                                    <p style="display: inline-block; margin-left: 4px;">Download</p>
                                </a>
                            </div>
                        </div>
                        <div class="row no-gutter dod-container">
                            <div class="col">
                                <img class="rec-img-dod" src="../assets/DoDseal.png"/>
                                <a class="pdf-link" href="http://www.donbrogdon.com/assets/DoD.pdf" target="_blank">
                                    <svg class="download-btn" height="32pt" viewBox="0 0 512 512" width="32pt" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m409.785156 278.5-153.785156 153.785156-153.785156-153.785156 28.285156-28.285156 105.5 105.5v-355.714844h40v355.714844l105.5-105.5zm102.214844 193.5h-512v40h512zm0 0"/>
                                    </svg>
                                    <p style="display: inline-block; margin-left: 4px;">Download</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div id="contact-mobile" class="swiper-slide contact-mobile">
                    <div class="container-fluid">
                        <div class="contact-container">
                            <div class="row no-gutter">
                                <div class="col">
                                    <h1 class="font-medium title-text">Contact</h1>
                                </div>
                            </div>
                            <div class="row no-gutter">
                                <div class="col">
                                   <form action="https://formspree.io/meqrnglw" method="POST">
                                        <label class="contact-label font-medium">To</label>
                                        <p class="to font-medium">dbrogdon91@gmail.com</p>
                                        <label class="contact-label font-medium">Email</label>
                                        <br/>
                                        <input class="contact-input" type="text" name="_replyto">
                                        <br/>
                                        <label class="contact-label font-medium">Message</label>
                                        <textarea class="contact-message" name="message"></textarea>
                                        <br/>
                                        <button class="btn btn-mobile font-medium" type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- navigation buttons --> 
        <div class="arrow-container">
            <div class="swiper-button-prev"></div>
            <div class="swiper-menu">
                <svg @click="goToSlide(0)" version="1.1" class="nav-item" fill="white" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; margin-left: 8px;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M503.401,228.884l-43.253-39.411V58.79c0-8.315-6.741-15.057-15.057-15.057H340.976c-8.315,0-15.057,6.741-15.057,15.057
                            v8.374l-52.236-47.597c-10.083-9.189-25.288-9.188-35.367-0.001L8.598,228.885c-8.076,7.36-10.745,18.7-6.799,28.889
                            c3.947,10.189,13.557,16.772,24.484,16.772h36.689v209.721c0,8.315,6.741,15.057,15.057,15.057h125.913
                            c8.315,0,15.057-6.741,15.057-15.057V356.931H293v127.337c0,8.315,6.741,15.057,15.057,15.057h125.908
                            c8.315,0,15.057-6.741,15.056-15.057V274.547h36.697c10.926,0,20.537-6.584,24.484-16.772
                            C514.147,247.585,511.479,236.245,503.401,228.884z M433.965,244.433c-8.315,0-15.057,6.741-15.057,15.057v209.721h-95.793
                            V341.874c0-8.315-6.742-15.057-15.057-15.057H203.942c-8.315,0-15.057,6.741-15.057,15.057v127.337h-95.8V259.49
                            c0-8.315-6.741-15.057-15.057-15.057H36.245l219.756-200.24l74.836,68.191c4.408,4.016,10.771,5.051,16.224,2.644
                            c5.454-2.41,8.973-7.812,8.973-13.774V73.847h74.002v122.276c0,4.237,1.784,8.276,4.916,11.13l40.803,37.18H433.965z"/>
                        </g>
                    </g>
                </svg>
                <svg @click="goToSlide(1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 482.9 482.9" style="enable-background:new 0 0 482.9 482.9;" xml:space="preserve" class="nav-item">
                    <g>
                        <path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5    c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6    c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z     M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4    c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0    c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                        <path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3    c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7    c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41    c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56    c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8    c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3    c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3    C447,415.5,446.9,388.8,446.8,383.6z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                    </g>
                </svg>
                <svg @click="goToSlide(2)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 522.468 522.469" style="enable-background:new 0 0 522.468 522.469;" xml:space="preserve" class="nav-item">
                    <g>
                        <path d="M325.762,70.513l-17.706-4.854c-2.279-0.76-4.524-0.521-6.707,0.715c-2.19,1.237-3.669,3.094-4.429,5.568L190.426,440.53    c-0.76,2.475-0.522,4.809,0.715,6.995c1.237,2.19,3.09,3.665,5.568,4.425l17.701,4.856c2.284,0.766,4.521,0.526,6.71-0.712    c2.19-1.243,3.666-3.094,4.425-5.564L332.042,81.936c0.759-2.474,0.523-4.808-0.716-6.999    C330.088,72.747,328.237,71.272,325.762,70.513z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                        <path d="M166.167,142.465c0-2.474-0.953-4.665-2.856-6.567l-14.277-14.276c-1.903-1.903-4.093-2.857-6.567-2.857    s-4.665,0.955-6.567,2.857L2.856,254.666C0.95,256.569,0,258.759,0,261.233c0,2.474,0.953,4.664,2.856,6.566l133.043,133.044    c1.902,1.906,4.089,2.854,6.567,2.854s4.665-0.951,6.567-2.854l14.277-14.268c1.903-1.902,2.856-4.093,2.856-6.57    c0-2.471-0.953-4.661-2.856-6.563L51.107,261.233l112.204-112.201C165.217,147.13,166.167,144.939,166.167,142.465z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                        <path d="M519.614,254.663L386.567,121.619c-1.902-1.902-4.093-2.857-6.563-2.857c-2.478,0-4.661,0.955-6.57,2.857l-14.271,14.275    c-1.902,1.903-2.851,4.09-2.851,6.567s0.948,4.665,2.851,6.567l112.206,112.204L359.163,373.442    c-1.902,1.902-2.851,4.093-2.851,6.563c0,2.478,0.948,4.668,2.851,6.57l14.271,14.268c1.909,1.906,4.093,2.854,6.57,2.854    c2.471,0,4.661-0.951,6.563-2.854L519.614,267.8c1.903-1.902,2.854-4.096,2.854-6.57    C522.468,258.755,521.517,256.565,519.614,254.663z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                    </g> 
                </svg>
                <svg @click="goToSlide(3)" version="1.1" class="nav-item" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 415 415" style="enable-background:new 0 0 415 415;" xml:space="preserve">
                    <g>
                        <path d="M35,0v415h345V0H35z M365,400H50V15h315V400z"  fill="#FFFFFF"/>
                        <rect x="90" y="71" width="115" height="15" fill="#FFFFFF"/>
                        <rect x="90" y="136" width="235" height="15" fill="#FFFFFF"/>
                        <rect x="90" y="200" width="235" height="15" fill="#FFFFFF"/>
                        <rect x="90" y="264" width="235" height="15" fill="#FFFFFF"/>
                        <rect x="90" y="329" width="235" height="15" fill="#FFFFFF"/>
                    </g>
                </svg>
                <svg @click="goToSlide(4)" class="nav-item" fill="white" id="Capa_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m384.721 0-323.626 323.627-61.095 188.373 188.374-61.094 323.626-323.627zm84.853 127.279-42.427 42.427-84.853-84.853 42.426-42.427zm-388.611 232.331 71.427 71.428-32.036 10.39-49.782-49.782zm14.501-27.925 225.617-225.618 31.82 31.82-225.618 225.617zm53.032 53.032 225.618-225.619 31.82 31.82-225.618 225.619zm-88.313 38.965 28.136 28.136-41.642 13.505z"/></g></svg>
                <svg  @click="goToSlide(5)" version="1.1" class="nav-item" id="Capa_1" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M460.8,68.267H17.067C7.641,68.267,0,75.908,0,85.333v307.2c0,9.426,7.641,17.067,17.067,17.067H460.8
                            c9.426,0,17.067-7.641,17.067-17.067v-307.2C477.867,75.908,470.226,68.267,460.8,68.267z M432.811,102.4L238.933,251.529
                            L45.056,102.4H432.811z M443.733,375.467h-409.6V137.062L228.54,286.6c6.13,4.707,14.657,4.707,20.787,0l194.406-149.538V375.467z
                            "/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</template>

<script>

export default {

    name: 'Mobile',
    props: {
        location: {
            type: String
        },
        phone: {
            type: String
        },
        email: {
            type: String
        },
        languages: {
            type: Array
        },
        technologies: {
            type: Array
        },
        other: {
            type: Array
        },
        project: {
            type: Array
        },
        workexp: {
            type: Array
        },
        education: {
            type: Array
        },
    },
     data() {
        return {
            swiper: null,
            displayState: true
        }
    },
    mounted() {
        this.swiper = new window.Swiper('.swiper-container', {
        effect: 'cube',
        grabCursor: true,
        cubeEffect: {
            shadow: false,
            slideShadows: false,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    })
  },
  methods: {
    goToSlide: function(slide) {
        this.swiper.slideTo(slide);
    },
    display: function(e) {
        e.prventDefault()
    }
  },
}
</script>

<style scoped lang="scss">
    @import './src/style/mobile.scss';
</style>