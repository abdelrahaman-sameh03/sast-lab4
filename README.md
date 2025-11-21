# SAST Lab 4 – Mutillidae II & Semgrep (Abdelrahman Sameh)

This repository contains my work for **SAST Lab 4**.  
The goal of the lab is to analyse the vulnerable web application **OWASP Mutillidae II**, find real vulnerabilities, and write **custom Semgrep rules** that detect these issues in the source code.

---

## 1. Project structure

```text
sast-lab4/
  semgrep/
    rules/
      php-sqli.yaml       # Custom rule for SQL injection
      php-xss-dns.yaml    # Custom rule for reflected XSS
      php-sqli.php        # Test file for the SQLi rule
      php-xss-dns.php     # Test file for the XSS rule
  (Mutillidae II source code is cloned locally but not stored in this repo)
