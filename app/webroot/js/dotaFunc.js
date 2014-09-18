/**
 * Created by QUAD04 on 9/15/2014.
 */
//Method to get the current page from url.
function GetCurrentPageName(){
    var pageURL = document.location.href;

    return pageURL;
}
function updateBar(id, btn){
    var level,newBarClass;
    var barClass = document.getElementById(id).classList;
    level = document.getElementById(id).getAttribute("aria-valuenow");
    level = parseInt(level);
    if(btn == 'minus' && level>0)
        level--;
    if(btn == 'plus' && level<10)
        level++;
    if(level < 4)
        newBarClass = "progress-bar-danger";
    else if(level >=4 && level <8)
        newBarClass = "progress-bar-warning";
    else
        newBarClass = "progress-bar-success";
    document.getElementById(id).classList.remove(barClass[3]);
    document.getElementById(id).classList.add(newBarClass);
    document.getElementById(id).style.width = level*10+"%";
    document.getElementById(id).innerHTML = level*10+"%";
    document.getElementById(id).setAttribute("aria-valuenow",level);
}
$(document).ready(function(){
    var CurrPage = GetCurrentPageName();
    switch(CurrPage){
        case'http://www.dota.dev/Heroes':
            $('#heroesSec').addClass('active');
        break;
        case'http://www.dota.dev/Sides':
            $('#sidesSec').addClass('active');
        break;
        case'http://www.dota.dev/Groups':
            $('#groupsSec').addClass('active');
        break;
        case'http://www.dota.dev/Strategies':
            $('#strategySec').addClass('active');
        break;
        case'http://www.dota.dev/Heroes/randomTeam':
            $('#randomSec').addClass('active');
        break;
        case'http://www.dota.dev/Heroes/randomTeamByStrategy':
            $('#randomSec').addClass('active');
        break;
    }
});