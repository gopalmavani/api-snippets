// Download the Node helper library from twilio.com/docs/node/install
// These identifiers are your accountSid and authToken from
// twilio.com/user/account
const accountSid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
const authToken = 'your_auth_token';
const client = require('twilio')(accountSid, authToken);


const feedbackSummarySid = 'FSa346467ca321c71dbd5e12f627deb854';

client.calls.feedbackSummaries(feedbackSummarySid)
  .remove()
  .then((result) => {
    console.log(`Sid ${feedbackSummarySid} deleted successfully.`);
  })
  .catch((err) => console.log(err));
