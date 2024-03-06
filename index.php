<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="resume.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="title">
        <h2>Resume Builder</h2>
    </div>
    <div class="container d-flex justify-content-center m-auto" >
        <form action="resume.php" method="post">
            <div class="form col-sm-12">
                <div class="block1 ">
                    <div class="heading ">
                        ABOUT SECTION
                    </div>
                    <div class="section">
                            <div class="row  d-flex">
                                <div class="col-sm-4 ">
                                <label>First Name</label>
                                <input type="text" id="firstname" name="firstname" >
                            </div>
                            <div class="col-sm-4">
                                <label for="middlename">Middle Name(optional)</label>
                                <input type="text" id="middlename" name="middlename">
                            </div>
                            <div class="col-sm-4">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" name="lastname" onblur="fillName()">
                            </div>
                        </div>
                        <div class="row  d-flex">
                            <div class="col-sm-4 ">
                                <label for="userimage">Your Image</label>
                                <input type="file" id="userimage" name="userimage" accept="image/*">
                            </div>
                            <div class="col-sm-4">
                                <label for="designation">Designation</label>
                                <input type="text" id="designation" name="designation" onblur="fillDesignation()">
                            </div>
                            <div class="col-sm-4">
                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" onblur="fillAddress()">
                            </div>
                        </div>
                        <div class="row  d-flex">
                            <div class="col-sm-4 ">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" onblur="fillEmail()">
                            </div>
                            <div class="col-sm-4">
                                <label for="phone">Phone No</label>
                                <input type="text" id="phone" name="phone" onblur="fillPhone()">
                            </div>
                            <div class="col-sm-4">
                                <label for="summary">Summary</label>
                                <input type="text" id="summary" name="summary" onblur="fillSummary()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block2 ">
                    <div class="heading ">
                        ACHIEVEMENTS
                    </div>
                    <div class="section">
                        <div class="row  d-flex" id="row-achievements">
                            <div class="col-sm-6">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title">
                            </div>
                            <div class="col-sm-6">
                                <label for="description">Description</label>
                                <input type="text" id="description" name="description" onblur="fillAchievement()">
                            </div>
                        </div>
                    </div>
                    <div class="button-section button-achievements">
                        <input class="btn btn-primary" type="button" value="+" name="button-achievements"
                            id="button-achievements">
                    </div>
                </div>
                <div class="block3 ">
                    <div class="heading ">
                        EXPERIENCE
                    </div>
                    <div class="section">
                        <div class="row  d-flex" id="row-experience">
                            <div class="col-sm-4">
                                <label for="title-company">Title</label>
                                <input type="text" id="title-company" name="title-company">
                            </div>
                            <div class="col-sm-4">
                                <label for="company-name">Company/Organization</label>
                                <input type="text" id="company-name" name="company-name">
                            </div>
                            <div class="col-sm-4">
                                <label for="company-location">Location</label>
                                <input type="text" id="company-location" name="company-location">
                            </div>
                            <div class="col-sm-4">
                                <label for="company-start-date">Start Date</label>
                                <input type="date" id="company-start-date" name="company-start-date">
                            </div>
                            <div class="col-sm-4">
                                <label for="company-end-date">End Date</label>
                                <input type="date" id="company-end-date" name="company-end-date">
                            </div>
                            <div class="col-sm-4">
                                <label for="company-description">Description</label>
                                <input type="text" id="company-description" name="company-description" onblur="fillCompany()">
                            </div>
                        </div>
                    </div>
                    <div class="button-section" id="button-experience">
                        <input class="btn btn-primary" type="button" value="+">
                    </div>
                </div>
                <div class="block4 ">
                    <div class="heading ">
                        EDUCATION
                    </div>
                    <div class="section">
                        <div class="row  d-flex" id="row-education">
                            <div class="col-sm-4">
                                <label for="school-name">School</label>
                                <input type="text" id="school-name" name="school-name">
                            </div>
                            <div class="col-sm-4">
                                <label for="degree">Degree</label>
                                <input type="text" id="degree" name="degree">
                            </div>
                            <div class="col-sm-4">
                                <label for="school-city">City</label>
                                <input type="text" id="school-city" name="school-city">
                            </div>
                            <div class="col-sm-4">
                                <label for="school-start-date">Start Date</label>
                                <input type="date" id="school-start-date" name="school-start-date">
                            </div>
                            <div class="col-sm-4">
                                <label for="school-end-date">End Date</label>
                                <input type="date" id="school-end-date" name="school-end-date">
                            </div>
                            <div class="col-sm-4">
                                <label for="school-description">Description</label>
                                <input type="text" id="school-description" name="school-description" onblur="fillEducation()">
                            </div>
                        </div>
                    </div>
                    <div class="button-section" id="button-education">
                        <input class="btn btn-primary" type="button" value="+">
                    </div>
                </div>
                <div class="block5 ">
                    <div class="heading ">
                        PROJECTS
                    </div>
                    <div class="section">
                        <div class="row  d-flex" id="row-projects">
                            <div class="col-sm-4">
                                <label for="project-name">Project Name</label>
                                <input type="text" id="project-name" name="project-name">
                            </div>
                            <div class="col-sm-4">
                                <label for="project-link">Project Link</label>
                                <input type="text" id="project-link" name="project-link">
                            </div>
                            <div class="col-sm-4">
                                <label for="project-description">Description</label>
                                <input type="text" id="project-description" name="project-description" onblur="fillProject()">
                            </div>
                        </div>
                    </div>
                    <div class="button-section" id="button-projects">
                        <input class="btn btn-primary" type="button" value="+">
                    </div>
                </div>
                <div class="block6 ">
                    <div class="heading ">
                        SKILLS
                    </div>
                    <div class="section">
                        <div class="row  d-flex" id="row-skills">
                            <div class="col-sm-12">
                                <label for="skill">Skill</label>
                                <input type="text" id="skill" name="skills[]" onblur="fillSkills()">
                            </div>
                        </div>
                    </div>
                    <div class="button-section button-achievements">
                        <input class="btn btn-primary" type="button" value="+" id="button-skills">
                    </div>
                </div>
            </div>
        </div>
        <div class="resume" id="container-to-print">
            <div style="margin:50px;" class="resume-container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 resume-left ">
                        <div class="img-section">
                            <img class="profile-image" src="#" id="image-preview">
                        </div>
                        <div class="name-section d-flex justify-content-center w-100">
                            <label for="name" name="label1" id="label-name"></label>
                        </div>
                        <div class="border-section d-flex justify-content-center">
                            <div class="borderName" style="border: solid 0.1px rgb(240, 240, 240); width: 100px;"></div>
                        </div>
                        <div class="post d-flex justify-content-center w-100">
                            <label for="post" id="label-designation"></label>
                        </div>
                        <div class="about" style="margin: 20px 10px;">
                            <h5>ABOUT</h5>
                            <label for="" id="resume-phone"></label>
                            <label for="" id="resume-email"></label>
                            <label for="" id="resume-address"></label>
                            <label for="" id="resume-summary"></label>
                        </div>
                        <div class="skills"  style="margin: 20px 10px;">
                            <h5>Skills</h5>
                            <label for="skills" id="resume-skills"></label>
                        </div>
                    </div>
                    <div class="col-md-7 resume-right ">
                        <div class="achievements">
                            <h6 >ACHIEVEMENTS</h6>
                            <div class="borderClass"></div>
                            <label for="" id="resume-achievements"></label>
                            <label for="" id="resume-achievements-description"></label>
                        </div>
                        <div class="education">
                            <h6>EDUCATIONS</h6>
                            <div class="borderClass"></div>
                            <label for="" id="education-school"></label>
                            <label for="" id="education-degree"></label>
                            <label for="" id="education-city"></label>
                            <label for="" id="education-start-date"></label>
                            <label for="" id="education-end-date"></label>
                            <label for="" id="education-description"></label>
                        </div>
                        <div class="experiences">
                            <h6>EXPERIENCES</h6>
                            <div class="borderClass"></div>
                            <label for="" id="experience-title"></label>
                            <label for="" id="experience-company"></label>
                            <label for="" id="experience-location"></label>
                            <label for="" id="experience-start-date"></label>
                            <label for="" id="experience-end-date"></label>
                            <label for="" id="experience-description"></label>
                        </div>
                        <div class="projects">
                            <h6>PROJECTS</h6>
                            <div class="borderClass"></div>
                            <label for="" id="resume-project-name"></label>
                            <label for="" id="resume-project-link"></label>
                            <label for="" id="resume-project-description"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="print d-flex justify-content-center">
                <input name="submitbutton" type="submit" value="PRINT" class="btn" id="print-button">
            </div>
        </form>
    </div>
    <script src="resume.js"></script>
</body>

</html>