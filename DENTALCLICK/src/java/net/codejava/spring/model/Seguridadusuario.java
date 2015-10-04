/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadusuario.findAll", query = "SELECT s FROM Seguridadusuario s")})
public class Seguridadusuario implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    private Long pkUsuario;
    private String esta;
    @Temporal(TemporalType.TIMESTAMP)
    private Date fechModi;
    @Temporal(TemporalType.TIMESTAMP)
    private Date fechRegi;
    private String nomb;
    private String pass;
    @JoinColumn(name = "fkPerfil", referencedColumnName = "pkPerfil")
    @ManyToOne
    private Seguridadperfil fkPerfil;

    public Seguridadusuario() {
    }

    public Seguridadusuario(Long pkUsuario) {
        this.pkUsuario = pkUsuario;
    }

    public Long getPkUsuario() {
        return pkUsuario;
    }

    public void setPkUsuario(Long pkUsuario) {
        this.pkUsuario = pkUsuario;
    }

    public String getEsta() {
        return esta;
    }

    public void setEsta(String esta) {
        this.esta = esta;
    }

    public Date getFechModi() {
        return fechModi;
    }

    public void setFechModi(Date fechModi) {
        this.fechModi = fechModi;
    }

    public Date getFechRegi() {
        return fechRegi;
    }

    public void setFechRegi(Date fechRegi) {
        this.fechRegi = fechRegi;
    }

    public String getNomb() {
        return nomb;
    }

    public void setNomb(String nomb) {
        this.nomb = nomb;
    }

    public String getPass() {
        return pass;
    }

    public void setPass(String pass) {
        this.pass = pass;
    }

    public Seguridadperfil getFkPerfil() {
        return fkPerfil;
    }

    public void setFkPerfil(Seguridadperfil fkPerfil) {
        this.fkPerfil = fkPerfil;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (pkUsuario != null ? pkUsuario.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadusuario)) {
            return false;
        }
        Seguridadusuario other = (Seguridadusuario) object;
        if ((this.pkUsuario == null && other.pkUsuario != null) || (this.pkUsuario != null && !this.pkUsuario.equals(other.pkUsuario))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadusuario[ pkUsuario=" + pkUsuario + " ]";
    }
    
}
