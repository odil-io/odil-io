// e307a813f1c5f7da38323ce7bc2f6998218fb5fd


// Create a personal access token at https://github.com/settings/tokens/new?scopes=repo
const octokit = new Octokit({ auth: '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' });

// Compare: https://docs.github.com/en/rest/reference/users#get-the-authenticated-user
const {
  data: { login },
} = await octokit.rest.users.getAuthenticated();
console.log("Hello, %s", login);