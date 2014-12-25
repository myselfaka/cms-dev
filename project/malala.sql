-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2014 at 08:25 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `malala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Id`, `user_name`, `user_password`) VALUES
(1, 'Abhishek', '8933060144'),
(2, 'Sanjay', '9208673058');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE IF NOT EXISTS `photo_gallery` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(100) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`img_id`, `img_name`) VALUES
(30, '1.jpg'),
(31, '2.jpg'),
(32, '3.jpg'),
(33, '4.jpg'),
(34, '5.jpg'),
(35, '2012-malala-yousafzai.jpg'),
(36, '1381765_309104649291422_345683355652055625_n.jpg'),
(38, 'chinoy-malala.jpg'),
(40, 'd.jpg'),
(41, 'dd.jpg'),
(42, 'diary.jpg'),
(43, 'download.jpg'),
(44, 'gty_malala_1_kb_ss_121019_ssh.jpg'),
(45, 'images.jpg'),
(46, 'l.jpg'),
(47, 'm.jpgalala_day_landing_web_final.jpg'),
(48, 'main.jpg'),
(49, 'mal.cl.jpg'),
(50, 'mal_college.jpg'),
(51, 'malal_day.jpg'),
(52, 'malala_rewrad.jpg'),
(53, 'Malala_Yousafzai_Oval_Office_11_Oct_2013.jpg'),
(54, 'Malala_Yousafzai_Strasbourg.jpg'),
(55, 'malala_yousefzai_taliban_victim.jpg'),
(56, 'malalaa.jpg'),
(57, 'msid-17887434.jpg'),
(58, 'msid-17887439.jpg'),
(59, 'msid-17887444.jpg'),
(60, 'msid-17887447.jpg'),
(61, 'msid-17887452.jpg'),
(62, 'msid-21053579.jpg'),
(63, 'Young-Pakistani-activist--011.jpg'),
(64, 'Woman_Scream1.jpg'),
(65, 'safe_image.jpg'),
(67, 'Pakistani-teenager-Malala-011.jpg'),
(68, 'n_71641_1.jpg'),
(69, 'msid-21053679.jpg'),
(70, 'msid-21053610.jpg'),
(71, 'msid-21053602.jpg'),
(72, 'msid-21053597.jpg'),
(73, 'msid-21053595.jpg'),
(74, 'msid-21053593.jpg'),
(75, 'msid-21053588.jpg'),
(76, 'msid-21053586.jpg'),
(77, 'msid-21053583.jpg'),
(78, '[CooL GuY] {{a2zRG}} (54).jpg'),
(79, '[CooL GuY] {{a2zRG}} (80).JPG'),
(80, '[CooL GuY] {{a2zRG}} (70).jpg'),
(81, 'book.jpg'),
(82, 'book1.jpg'),
(83, 'fund.jpg'),
(84, 'malala-satyarthi-131014.jpg'),
(85, 'n1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `post_date` date NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `post_content` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_date`, `post_author`, `post_image`, `post_content`) VALUES
(2, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-05', 'Abdul', '1.jpg', ' A gang of 10 Taliban fighters who tried to kill the teenage education activist Malala Yousafzai two'),
(3, 'Malala Yousafzai shows support for Nigerian girls abducted by Boko Haram', '2014-10-05', 'Aditi gaur', 'd.jpg', ' \r\n\r\n"The president promised me … that the abducted girls will return to their homes soon," Malala s'),
(4, 'About malala', '2014-10-05', 'Ashish', 'main.jpg', ' The inspiring story of Malala Yousafzai, the girl who stood up for education and changed the world.'),
(5, 'Malala get together Barak Obama in UK', '2014-10-05', 'Zafar', 'Malala_Yousafzai_Oval_Office_11_Oct_2013.jpg', ' "The president promised me … that the abducted girls will return to their homes soon," Malala said '),
(6, 'Malala get together Barak Obama in UK', '2014-10-06', 'Wali khan', 'images.jpg', 'malala goes to school in nvisgs and all the estimate expaindatuer given by the uk primeminister'),
(7, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-05', 'Sanjay sahu', 'diary.jpg', ' This about that girl which is generate by the pakistan news'),
(9, 'Malala in take of interview in media', '2014-10-06', 'Abhishek', '3.jpg', ' This post related about the malala life.\r\n"The president promised me … that the abducted girls will'),
(11, 'History about malala', '2014-10-05', 'Munaf patel', '5.jpg', ' Emerging lady of the world malala yousufzai'),
(12, 'Malala is a beautiful girl', '2014-10-05', 'Parvesh rasool', 'malala_rewrad.jpg', ' Malala is a very nice girl which is doing very well work  for your country.'),
(13, 'Malala Speak in front of media', '2014-10-06', 'Dilawar', 'msid-21053602.jpg', '\r\n\r\nPakistani schoolgirl Malala Yousafzai has addressed the United Nations as part of her campaign to ensure free compulsory education for every child.\r\n\r\nShe marked her 16th birthday by delivering the speech on Friday at the UN headquarters in New York.\r\n\r\nTaliban gunmen shot Malala on her school bus last October following her campaign for girls'' rights.\r\n\r\n"I am here to speak up for the right of education of every child," she said.'),
(14, 'Malala emerging  lady in this world', '2014-10-06', 'Sujain Khan', 'download.jpg', ' Consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. A'),
(15, 'Recently news of the malala:UK', '2014-10-07', 'Monica', 'chinoy-malala.jpg', ' Consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. A'),
(17, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-07', 'vikram thakur', 'malala_yousefzai_taliban_victim.jpg', ' "The president promised me &#65533; that the abducted girls will return to their homes soon," Malal'),
(28, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-08', 'Smith', 'fight.jpg', 'A gang of 10 Taliban fighters who tried to kill the teenage education activist Malala Yousafzai two years ago have been arrested, the Pakistan army claimed on Friday.\r\n\r\nThe military said a top commander of the Pakistani Taliban had told the men to kill the schoolgirl and 22 high-profile figures in Swat, the picturesque region where Yousafzai lived before being shot in the head by a gunman in October 2012, when she was 15.\r\n\r\nThe attack on a girl who had risen to prominence after campaigning against the efforts of the Taliban to violently stop girls attending school drew global condemnation. Despite serious head injuries Malala survived thanks to emergency care at Pakistani army facilities and subsequent surgery and rehabilitation at Birmingham''s Queen Elizabeth Hospital.\r\n\r\n"The entire gang involved in the murder attempt … has been busted," said army spokesman General Asim Bajwa.\r\n\r\nThe army said 10 members of the Tehreek-e-Taliban Pakistan (TTP), led by a local furniture shop owner called Zafar Iqbal, had been told to kill Malala and other "significant members" of the local community, including members of an anti-Taliban "peace committee".\r\n\r\nThe killing spree was ordered by Mullah Fazlullah, who became the overall leader of the TTP last year after his predecessor was killed by a US drone strike.\r\n\r\nNicknamed "Mullah Radio" for his fiery broadcasts at the time, Fazlullah was credited with spearheading the Taliban takeover of Swat in 2007-8. The valley, just a few hours drive from the capital Islamabad, was only reclaimed after a major military operation was launched in 2009.\r\n\r\nOn Friday the army said the initial arrest of a suspect called Israr ur Rehman revealed information that led to the capture of the other men in a series of intelligence led operations.\r\n\r\nThe full network was apprehended more than six months ago, an intelligence official said, although the news was kept under wraps for operational reasons.\r\n\r\nHe said the men had provided useful information for ongoing campaign launched in June against the TTP and other groups based in North Waziristan, a militant sanctuary bordering Afghanistan.\r\n\r\n"These men received their orders from Fazlullah so of course they had ties to the militant hideouts in North Waziristan," the official said.\r\n\r\nCommenting on the arrests, Malala''s father, Ziauddin Yousafzai, said: "This is good news for our family and most importantly, for the people of Pakistan and the civilised world.\r\n\r\n"This first step of apprehending Malala''s attackers signifies the beginning of real hope for the hundreds of thousands of people whose lives have been affected by terrorism in Khyber Pakhtunkhwa, in Swat and the whole country.\r\n\r\n"We greatly appreciate the efforts of the security forces and police in bringing these men to justice and fighting for the re-establishment of peace.\r\n\r\n"This is the beginning of the real restoration of the writ of the government, where the rule of law and justice prevails for all."\r\n\r\nIt was not clear whether the arrested men had been charged since their arrest and what legal basis they had been held.\r\n\r\nUnder the controversial Pakistan Protection Ordinance, recently introduced as a terrorism fighting measure, suspects can be held without charge for up to 90 days.\r\n\r\n"Soon they will be brought in front of law and booked according to the law of the land," the official said.\r\n\r\nShortly after the announcement, a former TTP spokesman issued a statement sayingsaid the army''s claims were based on "thoughts and fantasies".\r\n\r\nEhsan Ehsanullah, who has since joined a Taliban splinter group, said the initiative to kill Yousafzai had been taken by junior fighters and that the leadership was only informed later. In Swat the news that Yousafzai''s alleged attackers had been arrested was welcomed, although many people say the army has still not fully removed the Taliban threat from an area once regarded as a tourist destination.\r\n\r\n"I do not trust the army claims of the arrest of those who attacked Malala," said an academic in Swat who did not want to be named because of his anti-Taliban views. "The army always used to claim that they were just about to arrest Fazlullah, but now he is living safely in Afghanistan."\r\n\r\nThe young girl has made a remarkable recovery since a gunmen leaned into the back of a converted van she was sitting in to ask which of the girls waiting to be driven home after school was Malala. The schoolgirl had first defied militants by writing an anonymous BBC blog about life under the Taliban.\r\n\r\nTwo of her classmates, Shazia Ramzan and Kainat Riaz, were also injured in the attack.\r\n\r\nDespite world-wide admiration for a teenage girl who subsequently wrote a book, won the European Union''s human rights award and was nominated for a Nobel Peace Prize, many of her fellow Pakistanis are deeply suspicious of the global interest in her story.\r\n\r\nConspiracy theories abound, including that the entire incident was concocted by foreign spies to defame the TTP, even though the banned group enthusiastically took credit for the attack and threatened Pakistani journalists who criticised them for it.\r\n'),
(31, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-08', 'Anshika tiwari', 'chinoy-malala.jpg', ' Global education champion, Malala Yousafzai stipulated this week that she is not a puppet of the We'),
(32, 'A tale of two Pakistani girls: Malala Yousafzai and Nabila Rehman', '2014-11-01', 'Akhar', 'n1.jpg', 'While Malala Yousafzai received the Nobel Peace Prize for standing up for education and rights for girls, Nabila has been largely ignored by the Western media for questioning governmental action that has affected common public in different countries including Pakistan.\r\nWe all know about Pakistan''s braveheart Malala Yousafzai — the girl who defied Taliban and stood up for education and rights of girls in war ridden Pakistan. Recently, Malala received Nobel Peace Prize for her bravery alongwith Kailash Satyarthi and her ''AWorldAtSchool'' campaign has received record number of petitions. But, do we know about Nabila Rehman — the girl who lost her grandmother due to a drone attack while her sisters were injured. Her only question to US senators being, ''What was our fault'' which was largely ignored by most of the politicians. \r\nAccording to a recent report by Al Jazeera''s Murtaza Hussain who explained Nabila''s situation,"On October 24, 2012 a Predator drone flying over North Waziristan came upon eight-year-old Nabila Rehman, her siblings, and their grandmother as they worked in a field beside their village home. Her grandmother, Momina Bibi, was teaching the children how to pick okra as the family prepared for the coming Eid holiday. However on this day the terrible event would occur that would forever alter the course of this family''s life. In the sky the children suddenly heard the distinctive buzzing sound emitted by the CIA-operated drones - a familiar sound to those in the rural Pakistani villages which are stalked by them 24 hours a day - followed by two loud clicks. The unmanned aircraft released its deadly payload onto the Rehman family, and in an instant the lives of these children were transformed into a nightmare of pain, confusion and terror. Seven children were wounded, and Nabila''s grandmother was killed before her eyes, an act for which no apology, explanation or justification has ever been given."  Read the full report here\r\n\r\nAccording to reports, Nabila travelled all the way to Washington DC with her schoolteacher father and brother to speak about her ordeal and seek answers about the drone attacks. Despite her travails to reach Washington DC, Nabila and her family were largely ignored at the congressional hearing where they gave their testimony about the incident. \r\nOnly five out of 430 representatives showed up and in the words of Nabila''s father to those few who did attend: "My daughter does not have the face of a terrorist and neither did my mother. It just doesn''t make sense to me, why this happened… as a teacher, I wanted to educate Americans and let them know my children have been injured."\r\n\r\nThe reportage further adds that the translator broke down in tears while recounting their story. But the government ignored the tragedy it had caused to them. Nabila''s only question was, "What did my grandmother do wrong?," which was ignored by the US government. '),
(33, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-09', 'Ashwani', 'ompuri.jpg', 'People have prayed to God to spare me, and I was spared for a reason -- to use my life for helping p'),
(39, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-08', 'Himanshu', 'dd.jpg', ' One could say that the South-Asian reaction to Malala has more to do with our love of conspiracy th'),
(40, 'Men involved in Malala Yousafzai shooting arrested in Pakistan', '2014-10-08', 'Khusbu', 'd.jpg', ' Global education champion, Malala Yousafzai stipulated this week that she is not a "puppet of the W'),
(41, 'The Reluctant Heroine  Celebrity Aside  Malala Cause Is Real', '2014-10-08', 'Disha gupta', 'relucant.jpg', ' Global education champion, Malala Yousafzai stipulated this week that she is not a "puppet of the W'),
(43, 'Malala Yousafzai rallies to cause of kidnapped Nigerian schoolgirls', '2014-10-09', 'Anupam raj', 'Malala-Yousafzai--011.jpg', ' \r\nMalala Yousafzai,the Pakistani teenager shot in the head by the Taliban for championing the right'),
(44, 'As India, Pakistan exchanged bullets, Nobel laureates Malala, Satyarthi congratulated one another', '2014-10-31', 'Mukul shukla', 'malala-satyarthi-131014.jpg', 'And the 2014 Nobel Peace Prize goes to Pakistan''s Malala Yousafzai and India''s Kailash Satyarthi. The announcement on October 10, 2014 -- a date that will be etched in history -- was unexpected, what to say of ironical. As the hostile neigbours in a hot-cold-tepid-warm-icy relationship since 1947 shot across one another''s border, the 17-year-old education activist Yousafzai and the 60-year-old child rights activist Satyarthi congratulated one another. As they planned to work together to improve the lives of children of their countries, and globally, their countries'' armies shot indiscriminately across the borders killing children. It''s irrelevant if the child''s name is Mohammad or Ram; the bitter reality is the senseless end to a life that had nothing to do with the convoluted geopolitical dynamic, the nauseous display of machismo. It has got to end, and not a bullet too soon. Easier said than done. I don''t claim to be an analyst, nor do I''ve any pretension of understanding what goes for Pakistan-India power dynamic. This is not an in-depth look at the what/how/why of an ongoing state of war between my homeland and its closest neighbour. It''s merely my shaking-of-head at what appears to me the colossal recklessness of a few angry men, which threatens the very fragile [im] balance of that threadbare line that stops the two nuclear-armed countries to announce an open war. Pakistan-India border skirmishes are neither new nor particularly unpredicted. In repetition of a pattern, ostensibly, Pakistan indulges in a series of shelling/firing at Indian security forces'' posts, thus engendering enough distraction for infiltration of militants/freedom fighters (the vocabulary varies as per the perception/justification) into "Indian-occupied" Kashmir (the focal point of Pak-India animosity, or let''s just call it what it is, enmity since 1947. While India would love to retake the "Pakistan-occupied" Kashmir, the repeated insistence that it has never taken any step to violate the LoC is pooh-poohed by almost all Pakistan governments and the Establishment. Shelling begins; India reacts on a ten-bullets-to-one ratio; civilian casualties escalate; angry hyperbole roars throughout media on both sides; hawks threaten a doomsday scenario; government spokespersons mouth tough-sounding admonitions; social media debates between Pakistanis and Indians convolute into outright hatred of one another; and then the firing stops. Just another LoC disturbance, and things lull into that deceptive semblance of normalcy that threatens to break into slivers at a bullet''s notice. What''s so different this time? Nothing truly. The blame game is repetitively expected, and although the power paradigm is of one side being visibly superior in terms of its size and resources, there doesn''t appear to be any relenting in the posturing that goes for nationalism in the region known colloquially as the Subcontinent. On Eid-ul-Adha, the news came of heavy firing between the Pakistani and Indian forces along the Sialkot working boundary and the Jammu, Poonch and Samba districts along the LoC. The reaction: predictable. While Pakistani Rangers substantiated their firing as response to "unprovoked" Indian shelling, Indian BSF personnel stated the usual: Pakistani forces started the firing to "provide cover" for militants to infiltrate into Kashmir. As the latest round of two-way shelling/firing is being touted as the worst one in a decade, Pakistan is in an uproar blaming India for unprovoked firing that has reportedly killed 12, and injured dozens. There has been excessive damage to houses on the working boundary in Sialkot, and dozens of villages near the LoC have been vacated in the fear of constant shelling-firing from the Indian side. Eight Indians have been reported to be dead, and the number of injured is more than 50. About 20,000 villages have been vacated in the border region of Samba, Kathua, Jammu. The reports of heavy firing from both sides were constant, and amidst the roar of guns, the wails of victims seemed to be lost. Both sides persist in their blame-game, and although firing has halted - hopefully for longer than a few days - the media din appears to have obfuscated the need to initiate a dialogue that would help break the blazing of guns. The DGMOs telephonic talk was more like an exchange of big words and bigger accusations, and Pakistan''s request for a flag meeting on October 8 has met with a resounding no. So far nothing seems to have worked. Despite the "dove" gestures of Pakistan Prime Minister Nawaz Sharif to the new Prime Minister of India, Narendra Modi, who''s known to be a "hawk" when it comes to the Kashmir issue, the relationship dynamic appears to have shifted uneasily to its hostile level. Sharif"s clich?d speech at the UNGA summit in New York in September highlighted to all pragmatic observers, in Pakistan, his insistence to stick to the UN resolutions, which may not match the expected shift in Pakistan''s stance - updated and credible as per the dictates of its geopolitical strategy. The deadlock continues, and deaths on both sides add to the calculus of an unofficial war that threatens to consume much more than land if uncontrolled. Although the BSF explanation of Pakistan firing is the usual - attempt of militant infiltration -- J&K Chief Minister Omar Abdullah has negated that in the following statement given to CNN-IBN: "This Pakistani provocation has nothing to do with attempts to infiltrate militants into Jammu and Kashmir...All due to the internal situation in Pakistan." The expected grandiloquence is shriller than usual, and the wording suitably ominous. Indian Defence Minister Arun Jaitley, toeing his party''s hardline stance, stated: "If Pakistan persists with this adventurism, our forces will make cost of this adventurism unaffordable for it. Pakistan should stop this unprovoked firing and shelling if it wants peace on the border." In response Pakistani Defence Minister Khawaja Asif stated: "We do not want the situation on the borders of two nuclear neighbours to escalate into confrontation. India must demonstrate caution and behave with responsibility. We have responded with courage to ceasefire violations." And the machismo-riddled analysts/anchors/columnists spew more misplaced jingoism rather than utter even a few sentences that would at least give the semblance of reasonableness and composure. No lesson has been learnt. No trade treaties being signed. No joint plans to combat climate changes. No bilateral talks to fight terrorism. No joint plans of development. Without even getting into a full-fledged war, the two South Asian nations spend an enormous amount of their resources and attention on protecting the LoC, all of which if spent on their development would have helped millions. While the pragmatic belief is that of India''s lack of interest in attacking Pakistan, and Pakistan sans any pretence to overwhelm the bigger nation, the sabre-rattlers on both sides seem determined to keep the status quo of animosity on a constant simmer, ready to explode any time. What strategic value there is in having many die or become disabled in the extreme weather on the Siachen Glacier? How much of Indian resources is spent on illuminating the entire LoC, visible from space, ensuring the cessation of militant infiltration? What part of Pakistan''s total budget goes into equipping forces that protect borders that do not ensure the safety of those living there? How much has been achieved in the reported 73 Indian attacks on Pakistani border posts, and 47 of Pakistan on the Indian posts in 2014? What purpose has the alleged 209 violations of the ceasefire, 63 just in October, has served? Who is responsible for the deaths of innocent children, women and men on both sides? For Kashmir? Maybe it is time for the two nations to ask Kashmir on both sides of the LoC what it wants. Is the answer expected to be what Pakistan and India do not wish to face? To that I have no answer. '),
(45, 'Nobel Peace Prize winner Malala Yousafzai donates US $50,000 to re-build UN schools in Gaza', '2014-11-01', 'Sonali', '279269-malala-yousafzai.jpg', 'Pakistani teenage rights activist and Nobel Peace Prize winner Malala Yousafzai has donated US $50,000 to help rebuild UN schools in Gaza that have been damaged during the recent fighting in the enclave.\r\n"We must all work to ensure Palestinian boys and girls, and all children everywhere, receive a quality education in a safe environment. Because without education, there will never be peace," Malala said in Stockholm as she received the prestigious World Children''s Prize.\r\n\r\nMalala, 17, said the money would be channelled through the United Nations Relief and Works Agency (UNRWA) to help rebuild 65 schools in the Palestinian territory. The money would help children get "quality education" and continue their life, knowing they were not alone and that people were supporting them, she said.\r\n\r\nMalala, who survived being shot in the head by the Taliban in 2012 and now lives in the UK, was jointly awarded the Nobel Peace Prize earlier in October, alongside India''s 60-year-old Kailash Satyarthi for their championing of children''s rights.\r\n\r\nMalala has her own fund to help small-scale organisations in a number of countries, including Pakistan. She is the first person to receive the children''s prize and the Nobel in the same year.\r\n\r\nThe Sweden-based organisers of the children''s prize said millions of children around the world had voted for Malala.\r\n\r\nIn remarks published on the UNRWA website, Malala said the organisation was performing "heroic work" to serve children in Gaza.\r\n\r\n"The needs are overwhelming- more than half of Gaza''s population is under 18 years of age. They want and deserve quality education, hope and real opportunities to build a future," Malala said.\r\n\r\n"This funding will help rebuild the 65 schools damaged during the recent conflict. Innocent Palestinian children have suffered terribly and for too long," she said.\r\n\r\nPierre Krahenbuhl, UNRWA''s commissioner general, said the organisation was "deeply touched" by the gesture. It would "lift the spirits of a quarter of a million UNRWA students in Gaza and boost the morale of our more than 9,000 teaching staff there," he said.\r\n\r\nHe said Malala had "become a symbol of the boundless potential that lies within each and every child on Earth", and she was "an aspirational figure to the next generation in Palestine and beyond" as well as an inspiration to all.\r\n\r\nThe recent 51-day conflict in Gaza saw entire neighbourhoods flattened and almost one-third of the population uprooted. The violence killed more than 2,100 Palestinians, including more than 500 children, and more than 70 Israelis.\r\n\r\nThe children''s prize also announced two honorary laureates -- John Wood and Indira Ranamagar from Nepal.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
