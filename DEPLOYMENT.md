# Aiwizio WordPress Deployment Guide

## For HostingRaja Shared Hosting

### Prerequisites
- HostingRaja hosting account with cPanel access
- Domain name configured
- FTP client (FileZilla recommended)

### Deployment Steps

#### Option 1: Using Softaculous (Easiest - Recommended)

1. **Login to cPanel**
   - Go to your HostingRaja cPanel (yourdomain.com/cpanel)
   - Login with your credentials

2. **Find Softaculous**
   - Scroll to "Software" section
   - Click on "Softaculous Apps Installer"

3. **Install WordPress**
   - Find WordPress in the list
   - Click "Install"
   - Fill in details:
     - Choose Protocol: https://
     - Choose Domain: your domain
     - Directory: leave blank for root
     - Site Name: Aiwizio
     - Site Description: Your Business Powered by Intelligence
     - Admin Username: choose secure username
     - Admin Password: choose strong password
     - Admin Email: your email
   - Click "Install"

4. **Upload Custom Theme**
   - After WordPress installs, go to cPanel File Manager
   - Navigate to: public_html/wp-content/themes/
   - Upload the `aiwizio-theme` folder from this repository
   - Or use FTP to upload

5. **Upload Custom Plugin**
   - In File Manager, navigate to: public_html/wp-content/plugins/
   - Upload the `aiwizio-features` folder
   - Or use FTP to upload

6. **Activate Theme & Plugin**
   - Login to WordPress admin: yourdomain.com/wp-admin
   - Go to Appearance > Themes
   - Activate "Aiwizio Pro" theme
   - Go to Plugins
   - Activate "Aiwizio Features" plugin

7. **Create Pages**
   - Go to Pages > Add New
   - Create "About" page, select template "About Page"
   - Create "Contact" page, select template "Contact Page"
   - Create "Blog" page (standard page)

8. **Configure Settings**
   - Go to Settings > Reading
   - Set homepage to display your homepage
   - Set posts page to "Blog"

#### Option 2: Manual FTP Upload

1. **Download WordPress**
   - Download latest WordPress from wordpress.org
   - Extract the files

2. **Upload via FTP**
   - Connect to your hosting via FTP
   - Upload WordPress files to public_html/
   - Upload custom theme to wp-content/themes/
   - Upload custom plugin to wp-content/plugins/

3. **Create Database**
   - In cPanel, go to MySQL Databases
   - Create new database
   - Create database user
   - Add user to database with all privileges
   - Note down: database name, username, password

4. **Install WordPress**
   - Visit your domain
   - Follow WordPress installation wizard
   - Enter database details
   - Complete installation

5. **Activate Theme & Plugin**
   - Follow steps 6-8 from Option 1

### Post-Installation Configuration

#### Essential Plugins to Install

1. **Yoast SEO** - For search engine optimization
2. **WP Super Cache** - For performance
3. **Wordfence Security** - For security
4. **Contact Form 7** - Additional form options
5. **WP Mail SMTP** - For reliable email delivery

#### Recommended Settings

1. **Permalinks**
   - Go to Settings > Permalinks
   - Select "Post name"
   - Save changes

2. **SSL Certificate**
   - In cPanel, go to SSL/TLS Status
   - Install free Let's Encrypt SSL
   - Force HTTPS in WordPress settings

3. **Email Configuration**
   - Install WP Mail SMTP plugin
   - Configure with your email provider
   - Test email functionality

4. **Performance Optimization**
   - Enable WP Super Cache
   - Optimize images before uploading
   - Use CDN if available

### Customization

#### Upload Your Logo
1. Go to Appearance > Customize
2. Click on "Site Identity"
3. Upload your logo
4. Adjust size as needed

#### Change Colors (if needed)
1. Edit wp-content/themes/aiwizio-theme/style.css
2. Modify CSS variables at the top:
   ```css
   :root {
       --primary-blue: #0A2463;
       --secondary-blue: #1E3A8A;
       --accent-blue: #3B82F6;
   }
   ```

#### Add Content
1. Edit pages through WordPress admin
2. Add blog posts
3. Upload images to Media Library

### Maintenance

#### Regular Updates
- Update WordPress core monthly
- Update plugins weekly
- Update theme as needed
- Backup before updates

#### Backups
- Use HostingRaja's backup feature
- Or install UpdraftPlus plugin
- Schedule automatic backups

#### Security
- Keep everything updated
- Use strong passwords
- Enable two-factor authentication
- Monitor with Wordfence

### Support

For issues:
1. Check WordPress documentation
2. Contact HostingRaja support
3. Check plugin/theme documentation

### Live Chat Integration

To add live chat:
1. Sign up for Tawk.to (free) or Intercom
2. Get embed code
3. Add to theme footer or use plugin

### Analytics

To add Google Analytics:
1. Create Google Analytics account
2. Get tracking code
3. Install "GA Google Analytics" plugin
4. Add tracking ID

---

## Quick Start Checklist

- [ ] Install WordPress via Softaculous
- [ ] Upload custom theme
- [ ] Upload custom plugin
- [ ] Activate theme and plugin
- [ ] Create About and Contact pages
- [ ] Set up permalinks
- [ ] Install SSL certificate
- [ ] Install essential plugins
- [ ] Upload logo
- [ ] Configure email
- [ ] Add initial content
- [ ] Test all forms
- [ ] Set up backups
- [ ] Add analytics

Your Aiwizio website will be live at: **https://yourdomain.com**

Admin access: **https://yourdomain.com/wp-admin**
