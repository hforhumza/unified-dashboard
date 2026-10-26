# Cloudways Unified Dashboard (prototype)

Static HTML/CSS/JS prototype. No build step, no database. It runs on a Cloudways PHP application.

## Pages
- `/` opens `login.html`; after login the user lands on `index.html` (dashboard)
- `signup.html` creates an account and opens `launchpad.html`
- `launchpad.html` is the start screen, with links into the onboarding flows:
  `move-project.html`, `create-project.html`, `flexible-onboarding.html`,
  `autonomous-onboarding.html`, `velocity-onboarding.html`, `agent-onboarding.html`, `ai-website-builder.html`
- `api.html` is Integrations and API tokens

## Deploy on a Cloudways PHP server via Git
1. Create a GitHub repo and push the contents of this folder to the repo root (`index.php` and `login.html` must sit at the top level, not in a subfolder).
2. In Cloudways: Application → **Deployment via Git** → connect the repo, choose the branch, and set the deployment path (leave it blank for `public_html`).
3. Click **Start Deployment**. Open the application URL; it loads the login screen.
4. To update later, push to GitHub and use **Pull** in Deployment via Git.

## Optional: preview videos on the Launch Pad
Put MP4 files in `assets/videos/` using the names in `assets/videos/README.md`.
