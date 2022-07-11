<?php
/* database with the content of the header of the website */
/* It is divided in: 
    1) LOGO         -> String
    2) SECTION_NAME -> String
    3) ICONS        -> Array
    4) NAVBAR_LINKS -> Array
 */

$header_db = [
    "logo" => "./img/Google_logo.png",
    "section_name" => "Privacy & Terms",
    "icons" => [
        "app-icon" => "./img/dots-menu.svg",
        "user-icon" => "./img/user-icon.png"
    ],
    "navbar_links" => [
        "Overview",
        "Privacy Policy",
        "Terms of Service",
        "Technologies",
        "FAQ"
    ]
];


/* database with the content of the main section of the website */
/* It is divided in: 
    1) TITLE            -> Array
        - TAG           -> String
        - TEXT          -> String
    2)PARAGRAPHS        -> Array
    3)SUBPARAGRAPH      -> Array
    4)PARAGRAPHS-TWO    -> Array 
*/

$main_db = [
    [
        "title" => [
            "tag" => "h2",
            "text" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?"
        ],
        "paragraphs" => [
            "The recent <a href='#'>ruling by the Court of Justice of the European Union</a>  has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.",
            "Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.",
            "If you have a removal request, please fill out this <a href'#'>web form</a>. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.",
            "We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.",
            "When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.",
        ]
    ],
    [
        "title" => [
            "tag" => "h2",
            "text" => "Why is my account associated with a country?"
        ],
        "paragraphs" => [
            "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:",
            "<ol>
                <li>
                    The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:
                    <ol>
                        <li>Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland</li>
                        <li>Google LLC, based in the United States, for the rest of the world</li>
                    </ol>
                </li>
                <li>The version of the terms that govern our relationship, which can vary depending on local laws</li>
            </ol>",
            "Keep in mind that Google services are essentially the same, regardless of the affiliate that provides the services or your country association.",
        ],
        "subparagraph" => "Determining the country associated with your account",
        "paragraphs-two" => [
            "When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services – typically where you’ve spent the most time in the last year.",
            "Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.",
            "If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. Contact us if you think that your country association is wrong."
        ]
    ],
    [
        "title" => [
            "tag" => "h2",
            "text" => "How can I remove information about myself from Google’s search results?"
        ],
        "paragraphs" => [
            "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should <a href='#'>contact the webmaster</a> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please <a href='#'>click here</a>. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also <a href='#'>visit our help page for more information</a> ."
        ]
    ],
    [
        "title" => [
            "tag" => "h2",
            "text" => "Are my search queries sent to websites when I click on Google Search results?"
        ],
        "paragraphs" => [
            "In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the <a href='#'>Referrer URL</a>. The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found <a href='#'>here.</a> Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click."
        ]
    ]
];

/* database with the content of the footer section of the website */
/* It is divided in: 
    1) FOOTER_LINK      -> Array
    2)LANGUAGE          -> String
*/

$footer_db = [
    "footer_link" => [
        "Google",
        "About Google",
        "Privacy",
        "Terms"
    ],
    "language" => "English"
]


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="style.css">
    <title>Google FAQ</title>
</head>

<body>
    <header class="header-custom-container">
        <div class="container-fluid justify-space-between ">
            <div class="row p-2 ">
                <div class="col d-flex align-items-center">
                    <img class="custom-logo" src="<?php echo $header_db["logo"] ?>" alt="Google logo">
                    <p class="m-0 custom-header-text pt-0"><?php echo $header_db["section_name"] ?></p>
                </div>
                <div class="col d-flex justify-content-end gap-2 p-1">
                    <?php foreach ($header_db["icons"] as $index => $icon) { ?>
                        <img class="custom-icon-header " src="<?php echo $icon ?>" alt="<?php echo $icon ?>">
                    <?php } ?>
                </div>
            </div>
            <div class="row ps-2 custom-style-border">
                <div class="col ">
                    <?php foreach ($header_db["navbar_links"] as $nav_link) { ?>
                        <a class="custom-nav-link" href="#"><?php echo $nav_link ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>

    <body>
        <div class="container">
            <div class="row p-5">
                <div class="col">
                    <?php foreach ($main_db as $main) {
                        echo "<" . $main["title"]["tag"] . ">" . $main["title"]["text"] . "</" . $main["title"]["tag"] . ">";
                        foreach ($main["paragraphs"] as $paragraph) {
                            if (((strpos($paragraph, "<")) < 1) == true && ((strpos($paragraph, ">")) == strlen($paragraph) - 1) == true) {
                                echo  $paragraph;
                            } else {
                                echo "<p>" . $paragraph . "</p>";
                            }
                        }
                        
                        if (array_key_exists("subparagraph", $main) == true) {
                            echo "<h3>" . $main["subparagraph"] . "</h3>";
                        }
                            
                        if (array_key_exists("paragraphs-two", $main) == true) {
                            foreach($main["paragraphs-two"] as $paragraph_two) {
                                echo "<p>" . $paragraph_two . "</p>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="container-fluid custom-footer-bg">
            <div class="row custom-footer-alignment align-items-center">
                <div class="col">
                    <?php foreach ($footer_db["footer_link"] as $link) { ?>
                        <a class="custom-footer-link" href="#"><?php echo $link ?></a>
                    <?php } ?>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-center">
                    <i class="fa-solid fa-earth-africa fa-lg custom-icon-footer"></i>
                    <select class="form-select" aria-label="Default select example">
                        <option selected><?php echo $footer_db["language"] ?></option>
                        <option value="Spanish">Spanish</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Bengali">Bengali</option>
                        <option value="Portuguese">Portuguese</option>
                        <option value="Russian">Russian</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Vietnamese">Vietnamese</option>
                        <option value="Korean">Korean</option>
                        <option value="French">French</option>
                        <option value="German">German</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Italian">Italian</option>
                    </select>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>