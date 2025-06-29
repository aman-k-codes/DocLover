# 📝 DocLover (CraftMyDoc)

**All‑in‑one online document and image processing suite — fast, secure, and free.**

Visit: [https://craftmydoc.com](https://craftmydoc.com)

---

## 🚀 Features

### 🔄 File Conversions
- PDF → DOC, JPG, ZIP  
- JPG ↔ PNG, JPG → DOC, JPG → XL (spreadsheets) :contentReference[oaicite:1]{index=1}

### 📄 Document Tools
- PDF merge, split, delete/extract pages, compress :contentReference[oaicite:2]{index=2}

### 🖼️ Image Processing
- Crop, enhance clarity, background remover, photo resizing, OCR (image‑to‑text) :contentReference[oaicite:3]{index=3}

### ✨ Specialty Tools
- **Resume Maker** – create professional CVs online :contentReference[oaicite:4]{index=4}  
- **Sign Picker** – extract clean signature images from documents :contentReference[oaicite:5]{index=5}

---

## 🛠️ Tech Stack

- Built with Laravel & JavaScript (Vue.js/Alpine.js)  
- OCR & image processing backed by Python (e.g., Tesseract/OpenCV)  
- Secure upload/download flow with encrypted HTTPS operations

---

## 🔐 Why Use DocLover?

- **Fast & No Install** – fully browser‑based, responsive and mobile-friendly :contentReference[oaicite:6]{index=6}  
- **Secure** – encrypted uploads, no file retention post-processing :contentReference[oaicite:7]{index=7}  
- **Free with Premium Options** – core features accessible to all users :contentReference[oaicite:8]{index=8}

---

## 🧪 Demo

- Check out the live version at [https://craftmydoc.com](https://craftmydoc.com)  
- Example: Convert **PDF → DOC** or **JPG → DOC** in seconds

---

## 💻 Local Development

```bash
git clone https://github.com/yourusername/doclover.git
cd doclover

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install && npm run dev

# Set up .env (DB, storage paths, OCR service keys)
cp .env.example .env
php artisan key:generate

# Run local server
php artisan serve
