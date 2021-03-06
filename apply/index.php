<?php
    $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
    require_once "{$DOCUMENT_ROOT}/assets/php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/head.php"); ?></head>
<header id="header">
    <?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/header.php"); ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
</header>
<body>
    <div class="panel1">
        <img src="https://cdn.global-gaming.co/images/banner.png">
        <section>
            <div></div>
            <div class="panel1Content bottomStrip">
                <div class="blurImage">
                    <img class="containImage" src="https://cdn.global-gaming.co/images/banner.png">
                </div>
                <div class="p1c">
                    <span class="h3">Knockout Force</span>
                    <span class="h3"> — </span>
                    <span class="h3 red">Apply</span>
                </div>                
            </div>
            <div></div>
        </section>
    </div>
    <section>
        <h3 class="decoratedHeader1"><span><span class="red">Want to apply to</span> join the kOF team?</span></h3>
        <h4>Benifits</h2>
        <ul>
            <li>Knockout Force Team always aims to provide its members the most enjoyable experience while they are competing under our clan tag – kOF.</li><br>
            <li>Knockout Force Team does not offer monthly salaries, however in case a partnership deal is signed, the money is split within the team, partly going for merch, clan improvements, organizing tournaments and partly for the active members we have.</li><br>
            <li>Knockout Force Team is a great place/organization to start your professional eSports career, as mentioned earlier, we do not offer salaries, however we do have some popularity or recognition among the eSports industry, therefore joining us would definitely give you a little boost on getting yourself popular in terms of views, subscribers, followers etc.</li><br>
            <li>Knockout Force Team organizes tournaments each summer, allowing our members to compete between themselves and other players who will apply to join the tournaments. We organize tournaments in multiple games, which would allow you to compete in the game you mainly play. There is a winning reward, however it is changed each year depending on the clan’s budget at the moment.</li><br>
            <li>Knockout Force Team treats all of its clan members the same way. We like to keep things friendly, of course rivalry between members is allowed, but not to the point where it becomes pure toxicity.</li><br>
            <li class="bold">NOTE: BEFORE APPLYING, YOU HAVE TO FOLLOW ALL OUR CHANNELS ON SOCIAL MEDIA, WE WILL CHECK THIS BEFORE WE ALLOW YOU TO JOIN.</li><br>
        </ul>
        <button id="showApplication">Apply</button>
    </section>
    <div id="applyContainer">
        <div id="applyContainerClickOut"></div>
        <table id="applyMenu" class="center bottomStrip">
            <tr>
                <td class="tableDesign"><div><img src="https://cdn.global-gaming.co/images/Panda.png" class="center"></div></td>
                <td>
                    <table id="applyPages" class="page1">
                        <tr>
                            <td class="page1"><h3>Terms And Conitions</h3></td>
                            <td class="page2"><h3>Apply For kOF</h3></td>
                            <td class="page3"><h3>Application Status</h3></td>
                        </tr>
                        <tr>
                            <td class="page1">
                                <div class="tosText">
                                    1. After signing with kOF - Knockout Force, you are not allowed to sign, play, nor compete for another team on legal terms.<br><br>
                                    2. If you get kicked from kOF for abusing Privacy Policy, avoiding Terms of Contract or any other valid reasons that you've been kicked for, you can no longer apply nor join kOF in the future.<br><br>
                                    3. If your contract ends with kOF and you decide to pursue gaming career with other teams and want to join kOF after a while, you must not be (or was) a part of a team for the last 30 days. This means, if you left your last team and want to join kOF again someday in the future, you need to be solo without a team for the last 30 days.<br><br>
                                    4. kOF does not offer salaries unless we have Partnerships/Sponsorships with other brands. You are going to play for fun and also compete in tournaments that kOF provides to their members such as Group-knockout &amp; League Tournaments, and everything that you earn goes to you with an exception of, IF a deal is made by both sides (kOF &amp; Player) maximum of 20% from the earnings can be donated to kOF for future Merch &amp; larger Tournament options. This doesn't mean that kOF won't offer salaries in the future. As we're getting recognized fast on social media, looks like we might get really good sponsors in the future.<br><br>
                                    5. If kOF signs with a Sponsor/Partner on a limited time, you agree that you will be partially paid every month. This means, if the kOF team is getting funds from other brands as a sponsorship deal, you will be paid full-time. The salary depends on the income from the sponsors.<br><br>
                                    6. If you are going to be paid in this case, everything you earn from tournaments, 30% must be donated to kOF for future tournaments &amp; merch. You keep 70% of the income from tournaments, but only in case if you're receiving a monthly salary.<br><br>
                                    7. You must respect the eSport, Tournament &amp; being part of an eSport ORG's Privacy Policy.<br><br>
                                    8. Any disrespect, threat, provocation, insult, abusing of the team's rules is considered a ban from the team and future eSports organizations. Your name will be publicly shown and disgraced. So act right and follow the rules.<br><br>
                                    9. All data &amp; documents that you send to the kOF Owner or Manager will be strictly private. Nobody else has access to these files. We require pieces of information such as your real name, your last name, city &amp; country, a picture of you or just social media links, your age just so we know who is part of our team and their somewhat decent information so we know who is who. All of this information stays private by any means. This is required before you join kOF.<br><br>
                                    10. If you ever want to leave kOF before your contract ends, you must speak with the Owner or Manager first and make a deal on both sides. This is not an easy procedure, but it is still possible.<br><br>
                                    11. There will be an opportunity for your contracts to be renewed always, a month before it expires at least. Sometimes, they can be renewed through the year as well.<br><br>
                                    12. Merch is a good way of promoting the team. If you do decide to buy any type of merch to support the team, that's going to be a great way of you showing you love kOF and being part of it. Of course, when we have sponsors you won't have to buy everything since most of the stuff we'll be distributing for free for our members.<br><br>
                                    13. If required for you before you join kOF, to promote us on Social Media, on your sites or wherever, if you sign to do so, you are required to do it. Every decline after that results in a kick, unfortunately.<br><br>
                                    14. You are not allowed to break Terms of Service:<br>- Not allowed to insult members,<br>- Not allowed to provoke members,<br>- Not allowed to troll with members on their bad day,<br>- Not allowed to ask for their personal information,<br>- Not allowed to host tournaments for kOF,<br>- Not allowed to argue with members, especially not with Owner or Manager,<br>- Not allowed to ask for information about sponsorships/partnerships, all info is being shared anyway.<br>- Not allowed to stream if you don't have the allowance to do so,<br>- Not allowed to disrespect other team's members,<br>- You agree to act maturely at all costs on events.<br>
                                    15. Terms of Service will be constantly updated. Please take a look at it on a weekly or monthly basis.<br><br>
                                    16. You are not required, but it is good to promote all of our social media on your social media channels.<br><br>
                                    17. If required, you have to record videos of your gameplay and share them to our team editors or edit them yourself.<br><br>
                                    18. Just for personal information, the clan owner is Notorious KING (Nikola), clan manager is IwAn (Ivan) and the clan administrator is Readie (Tristan).<br><br>
                                    19. The clan will be locally created as an organization in Macedonia in the future and will be an official eSport Gaming Team organization.<br><br>
                                    20. kOF - Knockout Force Team has really strong ambitions and great ideas for the future. Being in the team helps you get clout for sure, and helps us get recognized if you are a great player in the games you provide you will be playing for. This means, its a win-win situation. We're working on our social media sites to be big in numbers, and it's going great so far!<br><br>
                                    21. By being a member of kOF you are allowed to shout yourself out on our Instagram channel, and use our Twitch, Mixer or YouTube channels to stream or distribute your videos, but ONLY if you have been part of kOF for 3 months already.<br><br>
                                    22. kOF is more than just a team. It's a gaming family. You should feel honored by being part of kOF, hang around with people across the globe and show off your gaming skills with big audiences. It's your moment to shine.<br><br>
                                    23. When joining kOF, you also must contribute your like, follow, subscription on our social media channels, and you're required to post on your social media that you signed for our gaming team.<br><br>
                                    24. If you're planning to be absent for more than a week, you must let the Owner know, and you have to give a valid reason.<br><br>
                                    25. If you get kicked from the clan, there is a chance that you can join the team later at some point. If you get banned from the clan, your journey here has stopped.<br><br>
                                    26. By being a member of kOF, you also must join our public GLOBAL GAMING Discord Community, and act responsive and respectful towards its Privacy Policy &amp; Rules.<br><br>
                                    27. Before joining kOF, you must be at least 15 years old. Any players playing for kOF under 15 y.o. will be interns for the team. Can still compete, but won't count in official rosters for the team, as you will be an intern.<br><br>
                                    28. If you become inactive without any notice, the first week you will be messaged. The following week after that you will be warned, and finally the third week you will be kicked, or possibly banned from the team, depending on the situation and the final word from Owner &amp; Manager.<br><br>
                                    29. If you get 3 warnings for the team, you will be kicked straight away. The 3rd warning is a kick. Make sure you have 2 or POSSIBLY less, even no warnings.<br><br>
                                    30. If you wish to donate or be a part of a sponsorship deal with the team, in case you want to sponsor certain tournaments, that's a possibility with benefits for you and the team both. Make sure you message the team Owner for this kind of procedure, and you go from there.<br><br>
                                    31. Racial slurs, insults, family jokes, mental issue jokes, toxic trolls, really bad behavior, suicide jokes, and all the rest bad type of attitude will be strictly punished. We do not support any of these provided, which means you will end up probably banned forever, not just from our team but most of the popular and recognizable eSport brands. You are required to report any kind of bad behavior to Manager firstly, and then Owner. It is okay to be competitive sometimes, and make game-related-jokes, calling someone a noob or trash on a calm way would be all right in some situations if the opposite person doesn't get offended by that, if he does, you need to turn that card down. Instead, it would be ideal if you prove yourself that you're a nice guy with a good set of gaming skills that would help you, our team, and everyone around you succeeds in the eSport Gaming business. Silly hahaha's are not needed that often.<br><br>
                                    32. Contracts can last for maximum a year, as said in the subjects above. Again, you're going to have to provide First Name, Last Name, Age, Country, Languages you're speaking, and a picture of you. If needed briefly, an Owner will approach you for more information if he feels he needs more info. For example, if we have a sponsor and we have to get paid, you will have to provide Bank Details so you can get paid. And all of the information stays classified.
                                </div>
                            </td>
                            <td class="page2">
                                <div class="applyFormContainer">
                                    <form id="applyForm">
                                        <input type="text" required name="forename" placeholder="Forename">
                                        <input type="text" required name="nickname" placeholder="Nickname">
                                        <input type="date" required name="birthdate" placeholder="Birthdate">
                                        <input type="text" required name="competedGames" placeholder="What game(s) fo you compete for?">
                                        <input type="text" required name="country" placeholder="Country">
                                        <input type="text" required name="email" placeholder="Email">
                                        <textarea type="text" required name="previousCompetitions" placeholder="Have you ever competed in eSports Tournaments, or in any other competitive gaming events, and if Yes, where and what games?"></textarea>
                                        <textarea type="text" required name="whykOF" placeholder="Why should you be in kOF?"></textarea>
                                        <select type="number" required name="daysActive">
                                            <option disabled selected value="placeholder">Days active per-week</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                        <select type="number" required name="streamUpload">
                                            <option disabled selected value="placeholder">Can you stream and upload?</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <input type="submit" name="submit"></input>
                                    </form>
                                </div>
                            </td>
                            <td class="page3"><h3 id="page3Status"></h3></td>
                        </tr>
                        <tr>
                            <td class="page1"><button id="page1Button">Next</button></td>
                            <td class="page2"><button id="submitApplication">Submit</button></td>
                            <td class="page3"><button id="page3Button">Done</button></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>