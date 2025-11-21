# SAST Lab 4 – Mutillidae II & Semgrep (Abdelrahman Sameh)

This repository contains my work for SAST Lab 4.  
I analysed OWASP Mutillidae II, found SQL injection and XSS vulnerabilities,
and wrote custom Semgrep rules to detect these patterns in the PHP source code.

## Structure

- `mutillidae/` – Git submodule pointing to the official Mutillidae II project  
- `semgrep/rules/`
  - `php-sqli.yaml` – custom rule for SQL injection  
  - `php-xss-dns.yaml` – custom rule for reflected XSS  
  - `php-sqli.php` – tests for the SQLi rule  
  - `php-xss-dns.php` – tests for the XSS rule  

All work is committed on the branch `semgrep/AbdelrahmanSameh`.

## Semgrep

### 1. Run tests for the custom rules

```bash
docker run --rm -v "${PWD}:/src" semgrep/semgrep semgrep --test /src/semgrep/rules

```
### 2. Run a scan on the Mutillidae source code
```bash
docker run --rm -v "${PWD}:/src" semgrep/semgrep semgrep --config /src/semgrep/rules /src/mutillidae/src
```
## Report

You can download and view the full report here:

[📄 SAST Lab 4 Report – Abdelrahman Sameh](SAST_Lab4_Report_AbdelrahmanSameh.pdf)
