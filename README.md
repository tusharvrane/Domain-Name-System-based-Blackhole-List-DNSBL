# DNSBL
Tool to check whether IP address's are present in global spam list, i.e IP address which has been flagged due to alleged bot or spamming activity

Short Introduction of Barracuda Central

http://www.barracudacentral.org/

Barracuda Central maintains an Barracuda Reputation Block List (BRBL)

Starting in September 2008, Barracuda Networks introduced the Barracuda Reputation Block List (BRBL – pronounced "bahr-bel") as a free DNSBL of IP addresses known to send spam. Barracuda Networks fights spam and created the BRBL to help stop the spread of spam.

Registration is simple and immediate. Please note that this service is provided free of charge, therefore Barracuda Networks reserves the right to refuse service to spammers, competitors and other parties at the company's discretion. This service is provided as is with no warranty of any kind.

Just register for free at http://www.barracudacentral.org/account/register

Your account will get activated within 10 minutes, specify the IP address from where you are going to request the checking process so that you won't get banned or rate limited. For time being the provided script will work as it also accepts limited number of requests from localhost i.e 1270.0.1.

*I again repeat that if you provide your IP address in your account from which you are going to send the IP validation requests you won't get rate limited and there aren't any capping on any number of requests, but still i assume you shouldn't bombard with requests at once, you need to manage your request cycle efficently.

For any queries feel free to email me at i@tusharvrane.com

Tips -: If you need to check the ip on other DNSBL providers, below is the list of the same. 

Algorithm -: 
	Just inverse the IP address, like say your IP Address is 192.168.0.1 so before inserting or appending it to a url checking string, just inverse it like 1.0.168.192

=> Open your terminal and insert the following command 

=> host 125.99.57.194.b.barracudacentral.org

=> O/p when ip address is found in spam list or block list -:  194.57.99.125.b.barracudacentral.org has address 127.0.0.2

=> Note -: 127.0.0.2 can be any ip address based on where it found the address in its own database directory, so its better you just let it go.

=> O/p when ip address is not found in spam list or block list -:  Host 125.99.57.194.b.barracudacentral.org not found: 3(NXDOMAIN)

=> Similarly for others also follow the same process -:
=> For eg -: host 194.57.99.125.dnsbl.sorbs.net

List of some DNSBL providers

access.redhawk.org
bl.emailbasura.org
bl.spamcop.net
blackholes.five-ten-sg.com
block.dnsbl.sorbs.net
cart00ney.surriel.com
dev.null.dk
dialups.visi.com
dnsbl.anticaptcha.net
dnsbl.justspam.org
dnsbl.sorbs.net
dnsbl-2.uceprotect.net
dul.dnsbl.sorbs.net
hil.habeas.com
intruders.docs.uu.se
l2.apews.org
msgid.bl.gweep.ca
old.dnsbl.sorbs.net
proxy.bl.gweep.ca
rbl.schulte.org
relays.bl.gweep.ca
relays.nether.net
smtp.dnsbl.sorbs.net
spam.olsentech.net
tor.ahbl.org
web.dnsbl.sorbs.net
zombie.dnsbl.sorbs.net
rbl.megarbl.net
b.barracudacentral.org
bl.shlink.org
bl.technovision.dk
blackholes.wirehub.net
blocked.hilli.dk
cbl.abuseat.org
dialup.blacklist.jippg.org
dnsbl.abuse.ch
dnsbl.antispam.or.id
dnsbl.kempt.net
dnsbl.tornevall.org
dnsbl-3.uceprotect.net
dul.ru
black.junkemailfilter.com
ips.backscatterer.org
mail-abuse.blacklist.jippg.org
new.dnsbl.sorbs.net
opm.tornevall.org
psbl.surriel.com
rbl.snark.net
relays.bl.kundenserver.de
rsbl.aupads.org
socks.dnsbl.sorbs.net
spamguard.leadmon.net
tor.dnsbl.sectoor.de
xbl.spamhaus.org
dnsbl.inps.de
bl.csma.biz
bl.spamcannibal.org
bl.tiopan.com
blacklist.sci.kun.nl
bogons.cymru.com
cblless.anti-spam.org.cn
dialups.mail-abuse.org
dnsbl.ahbl.org
dnsbl.dronebl.org
dnsbl.njabl.org
dnsbl-1.uceprotect.net
duinv.aupads.org
escalations.dnsbl.sorbs.net
http.dnsbl.sorbs.net
korea.services.net
misc.dnsbl.sorbs.net
no-more-funn.moensted.dk
pbl.spamhaus.org
pss.spambusters.org.ar
recent.dnsbl.sorbs.net
relays.mail-abuse.org
sbl.spamhaus.org
spam.dnsbl.sorbs.net
spamsources.fabel.dk
ubl.unsubscore.com
zen.spamhaus.org
dyn.shlink.org
