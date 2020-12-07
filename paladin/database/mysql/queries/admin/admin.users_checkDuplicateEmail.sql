SELECT COUNT(*)
FROM !PREFIX!users_used_emails
WHERE email = ?
  AND user_id != ?
