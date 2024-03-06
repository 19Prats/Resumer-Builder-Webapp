var achievementsArray = [];
achievementsArray.push(document.getElementById('title'));
achievementsArray.push(document.getElementById('description'));
document.getElementById('button-achievements').addEventListener('click',function(){
    var originalSection = document.getElementById("row-achievements");
    var cloneSelection = originalSection.cloneNode(true);
    var achievement = cloneSelection.querySelector('#title');
    var description = cloneSelection.querySelector('#description');
    achievement.value = null;
    description.value = null;
    achievementsArray.push(achievement);
    achievementsArray.push(description);
    originalSection.parentElement.appendChild(cloneSelection);
});
var experienceArray = [];
experienceArray.push(document.getElementById('title-company'));
experienceArray.push(document.getElementById('company-name'));experienceArray.push(document.getElementById('company-location'));experienceArray.push(document.getElementById('company-start-date'));experienceArray.push(document.getElementById('company-end-date'));experienceArray.push(document.getElementById('company-description'));
document.getElementById('button-experience').addEventListener('click',function(){
    var originalSection = document.getElementById("row-experience");
    var cloneSelection = originalSection.cloneNode(true);
    cloneSelection.querySelector('#title-company').value =null;
    cloneSelection.querySelector('#company-name').value =null;
    cloneSelection.querySelector('#company-location').value =null;
    cloneSelection.querySelector('#company-start-date').value =null;
    cloneSelection.querySelector('#company-end-date').value =null;
    cloneSelection.querySelector('#company-description').value =null;
    experienceArray.push(cloneSelection.querySelector('#title-company'));
    experienceArray.push(cloneSelection.querySelector('#company-name'));
    experienceArray.push(cloneSelection.querySelector('#company-location'));
    experienceArray.push(cloneSelection.querySelector('#company-start-date'));
    experienceArray.push(cloneSelection.querySelector('#company-end-date'));
    experienceArray.push(cloneSelection.querySelector('#company-description'));
    originalSection.parentElement.appendChild(cloneSelection);
});
var educationArray = [];
educationArray.push(document.getElementById('school-name'));
educationArray.push(document.getElementById('degree'));
educationArray.push(document.getElementById('school-city'));
educationArray.push(document.getElementById('school-start-date'));
educationArray.push(document.getElementById('school-end-date'));
educationArray.push(document.getElementById('school-description'));
document.getElementById('button-education').addEventListener('click',function(){
    var originalSection = document.getElementById("row-education");
    var cloneSelection = originalSection.cloneNode(true);
    cloneSelection.querySelector("#school-name").value = null;
    cloneSelection.querySelector("#degree").value = null;
    cloneSelection.querySelector("#school-city").value = null;
    cloneSelection.querySelector("#school-start-date").value = null;
    cloneSelection.querySelector("#school-end-date").value = null;
    cloneSelection.querySelector("#school-description").value = null;
    educationArray.push(cloneSelection.querySelector("#school-name"));
    educationArray.push(cloneSelection.querySelector("#degree"));
    educationArray.push(cloneSelection.querySelector("#school-city"));
    educationArray.push(cloneSelection.querySelector("#school-start-date") );
    educationArray.push(cloneSelection.querySelector("#school-end-date"));
    educationArray.push(cloneSelection.querySelector("#school-description"));
    originalSection.parentElement.appendChild(cloneSelection);
});
var projectArray = [];
projectArray.push(document.getElementById('project-name'));
projectArray.push(document.getElementById('project-link'));
projectArray.push(document.getElementById('project-description'));
document.getElementById('button-projects').addEventListener('click',function(){
    var originalSection = document.getElementById("row-projects");
    var cloneSelection = originalSection.cloneNode(true);
    cloneSelection.querySelector('#project-name').value = null;
    cloneSelection.querySelector('#project-link').value = null;
    cloneSelection.querySelector('#project-description').value = null;
    projectArray.push(cloneSelection.querySelector('#project-name'));
    projectArray.push(cloneSelection.querySelector('#project-link'));
    projectArray.push(cloneSelection.querySelector('#project-description'));
    originalSection.parentElement.appendChild(cloneSelection);
});
var skillsArray = [];
skillsArray.push(document.getElementById("skill"));
document.getElementById('button-skills').addEventListener('click',function(){
    var originalSection = document.getElementById("row-skills");
    var cloneSelection = originalSection.cloneNode(true);
    var arrayElement = cloneSelection.querySelector('input');
    cloneSelection.querySelector('input').value = null;
    skillsArray.push(arrayElement);
    originalSection.parentElement.appendChild(cloneSelection);
});
var firstName,middleName,lastName;
function fillName(){
    firstName =document.getElementById("firstname").value;
    middleName =document.getElementById("middlename").value;
    lastName =document.getElementById("lastname").value;
    document.getElementById("label-name").innerText = firstName+" "+middleName+" "+lastName;
    document.getElementById("Print-label-name").innerText = firstName+" "+middleName+" "+lastName;
}
var designation;
function fillDesignation(){
    designation = document.getElementById("designation").value;
    document.getElementById("label-designation").innerText = designation;
    document.getElementById("Print-label-designation").innerText = designation;
}
var phone;
function fillPhone(){
    phone = document.getElementById("phone").value;
    document.getElementById("resume-phone").innerText = phone;
    document.getElementById("Print-resume-phone").innerText = phone;
}
var address;
function fillAddress(){
    address = document.getElementById("address").value;
    document.getElementById("resume-address").innerText = address;
    document.getElementById("Print-resume-address").innerText = address;
}
var summary;
function fillSummary(){
    summary = document.getElementById("summary").value;
    document.getElementById("resume-summary").innerText = summary; 
    document.getElementById("Print-resume-summary").innerText = summary; 
}
var email;
function fillEmail(){
    email = document.getElementById("email").value;
    document.getElementById("resume-email").innerText = email
    document.getElementById("Print-resume-email").innerText = email
}
var skillIterator = 1;
function fillSkills(){
    var originalLabel = document.getElementById("resume-skills");
    originalLabel.innerText = skillsArray[0].value;
    for(;skillIterator<skillsArray.length;skillIterator++){
        var clone = originalLabel.cloneNode(true);
        clone.innerText = skillsArray[skillIterator].value;
        originalLabel.parentElement.appendChild(clone);
    }   
}
var achievementIterator = 2;
function fillAchievement(){
    var originalTitle = document.getElementById("resume-achievements");
    var originalDescription = document.getElementById("resume-achievements-description");
    originalTitle.innerText = achievementsArray[0].value;
    //originalTitlePrint.innerText = achievementsArray[0].value;
    originalDescription.innerText = achievementsArray[1].value;
    //originalDescriptionPrint.innerText = achievementsArray[1].value;
    for(;achievementIterator<achievementsArray.length;achievementIterator++){
        var cloneTitle = originalTitle.cloneNode(true);
        var cloneDescription = originalDescription.cloneNode(true);
        cloneTitle.innerText = achievementsArray[achievementIterator++].value;
        cloneDescription.innerText = achievementsArray[achievementIterator].value;
        originalTitle.parentElement.appendChild(cloneTitle);
        originalDescription.parentElement.appendChild(cloneDescription);
    }
}
var educationIterator = 6;
function fillEducation(){
    document.getElementById("education-school").innerText = educationArray[0].value;
    document.getElementById("education-degree").innerText = educationArray[1].value;
    document.getElementById("education-city").innerText = educationArray[2].value;
    document.getElementById("education-start-date").innerText = educationArray[3].value;
    document.getElementById("education-end-date").innerText = educationArray[4].value;
    document.getElementById("education-description").innerText = educationArray[5].value;
    for(;educationIterator<educationArray.length;educationIterator++){
        var cloneSchool = document.getElementById("education-school").cloneNode(true);
        var cloneDegree = document.getElementById("education-degree").cloneNode(true);
        var cloneCity = document.getElementById("education-city").cloneNode(true);
        var cloneStart = document.getElementById("education-start-date").cloneNode(true);
        var cloneEnd = document.getElementById("education-end-date").cloneNode(true);
        var cloneDescription = document.getElementById("education-description").cloneNode(true);
        cloneSchool.innerText = educationArray[educationIterator++].value;
        cloneDegree.innerText = educationArray[educationIterator++].value;
        cloneCity.innerText = educationArray[educationIterator++].value;
        cloneStart.innerText = educationArray[educationIterator++].value;
        cloneEnd.innerText = educationArray[educationIterator++].value;
        cloneDescription.innerText = educationArray[educationIterator++].value;
        document.getElementById("education-school").parentElement.appendChild(cloneSchool);
        document.getElementById("education-degree").parentElement.appendChild(cloneDegree);
        document.getElementById("education-city").parentElement.appendChild(cloneCity);
        document.getElementById("education-start-date").parentElement.appendChild(cloneStart);
        document.getElementById("education-end-date").parentElement.appendChild(cloneEnd);
        document.getElementById("education-description").parentElement.appendChild(cloneDescription);
    }
}
function fillCompany(){
    document.getElementById("experience-title").innerText = experienceArray[0].value;
    document.getElementById("experience-company").innerText = experienceArray[1].value;
    document.getElementById("experience-location").innerText = experienceArray[2].value;
    document.getElementById("experience-start-date").innerText = experienceArray[3].value;
    document.getElementById("experience-end-date").innerText = experienceArray[4].value;
    document.getElementById("experience-description").innerText = experienceArray[5].value;
    for(var experienceIterator = 6;experienceIterator < experienceArray.length;experienceIterator++){
        var cloneExperience = document.getElementById("experience-title").cloneNode(true);
        var cloneCompany = document.getElementById("experience-company").cloneNode(true);
        var cloneLocation = document.getElementById("experience-location").cloneNode(true);
        var cloneStart = document.getElementById("experience-start-date").cloneNode(true);
        var cloneEnd = document.getElementById("experience-end-date").cloneNode(true);
        var cloneDescription = document.getElementById("experience-description").cloneNode(true);
        cloneExperience.innerText = experienceArray[experienceIterator++].value;
        cloneCompany.innerText = experienceArray[experienceIterator++].value;
        cloneLocation.innerText = experienceArray[experienceIterator++].value;
        cloneStart.innerText = experienceArray[experienceIterator++].value;
        cloneEnd.innerText = experienceArray[experienceIterator++].value;
        cloneDescription.innerText = experienceArray[experienceIterator++].value;
        document.getElementById("experience-title").parentElement.appendChild(cloneExperience);
        document.getElementById("experience-company").parentElement.appendChild(cloneCompany);
        document.getElementById("experience-location").parentElement.appendChild(cloneLocation);
        document.getElementById("experience-start-date").parentElement.appendChild(cloneStart);
        document.getElementById("experience-end-date").parentElement.appendChild(cloneEnd);
        document.getElementById("experience-description").parentElement.appendChild(cloneDescription);
    }
}
function fillProject(){
    document.getElementById('resume-project-name').innerText = projectArray[0].value;
    document.getElementById('resume-project-link').innerText = projectArray[1].value;
    document.getElementById('resume-project-description').innerText = projectArray[2].value;
    for(projectIterator = 3; projectIterator < projectArray.length ; projectIterator++){
        var cloneProject = document.getElementById("project-name").cloneNode(true);
        var cloneLink = document.getElementById("project-link").cloneNode(true);
        var cloneDescription = document.getElementById("project-description").cloneNode(true);
        cloneProject.innerText = projectArray[projectIterator++].value;
        cloneLink.innerText = projectArray[projectIterator++].value;
        cloneDescription.innerText = projectArray[projectIterator++].value;
        document.getElementById('project-name').parentElement.appendChild(cloneProject);
        document.getElementById('project-link').parentElement.appendChild(cloneLink);
        document.getElementById('project-description').parentElement.appendChild(cloneDescription);
    }
}

// document.getElementById("print-button").addEventListener("click", function() {
//     var containerToPrint = document.getElementById("container-to-print");
//     var printWindow = window.open("", "_blank");
//     printWindow.document.open();
//     printWindow.document.write('<html><head><title>Print</title>');
//     printWindow.document.write("<link rel='stylesheet' type='text/css' href='resume.css'>");
//     printWindow.document.write('</head><body>');
//     printWindow.document.write(containerToPrint.innerHTML);
//     printWindow.document.write('</body></html>');
//     printWindow.document.close();
//     printWindow.print();
//     printWindow.close();
// });

const userImageInput = document.getElementById("userimage");
const imagePreview = document.getElementById("image-preview");

    // Add an event listener to the input element to handle the file selection
    // userImageInput.addEventListener('change', function() {
    //     const selectedFile = userImageInput.files[0];

    //     if (selectedFile) {
    //         // Create a URL for the selected image and set it as the src for the image tag
    //         const imageURL = URL.createObjectURL(selectedFile);
    //         imagePreview.src = imageURL;
    //     } else {
    //         // Clear the image source if no file is selected
    //         imagePreview.src = '';
    //     }
    // });