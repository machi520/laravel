$(function(){
    $('.headC').click(function () {
        $('.headB').slideToggle();
    });
});

let parliaments = parseInt(nihon.parliament) + parseInt(nihon.prefectural_assembly);
let servants = parseInt(nihon.civil_servant) + parseInt(nihon.government_official);
let voters = parseInt(nihon.voters);
let non_voters = parseInt(nihon.non_voted_person);



// { id: "48", prefecture: "全国", voters: "105988826", non - voted - person: "18449938", parliament: "713", … }
// city: "19914"
// civil - servant: "1390987"
// government - official: "578063.0"
// id: "48"
// non - voted - person: "18449938"
// parliament: "713"
// prefectural - assembly: "2726"
// prefecture: "全国"
// village: "11931"
// voters: "105988826"
// voting - rate: "48.8"
// __proto__: Object